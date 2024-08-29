<?php

require_once __DIR__ . '/../vendor/autoload.php'; // โหลด autoload ของ Composer

use Bramus\Router\Router;
use Jenssegers\Blade\Blade;
use App\Console\Migrate;

// เช็คว่าถูกเรียกจาก CLI (Command Line Interface)
if (php_sapi_name() == "cli") {
    $config = require_once __DIR__ . '/../config/database.php';
    $dsn = "mysql:host={$config['host']};dbname={$config['database']};charset={$config['charset']}";
    $pdo = new PDO($dsn, $config['username'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $migrate = new Migrate($pdo);

    if ($argv[1] == 'migrate') {
        $migrate->migrate();
    } elseif ($argv[1] == 'rollback') {
        $migrate->rollback();
    }
    exit;
}

// ตั้งค่า Router
$router = new Router();
$router->setNamespace('\App\Controllers');
require __DIR__ . '/../routes/web.php';

// ตั้งค่า Blade สำหรับการแสดงผล
$views = __DIR__ . '/../app/Views';
$cache = __DIR__ . '/../storage/cache';
$blade = new Blade($views, $cache);

// ตั้งค่า PDO สำหรับการเชื่อมต่อกับฐานข้อมูล
$config = require_once __DIR__ . '/../config/database.php';
$dsn = "mysql:host={$config['host']};dbname={$config['database']};charset={$config['charset']}";
$pdo = new PDO($dsn, $config['username'], $config['password']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// จัดการ Application Container
$app = new stdClass();
$app->router = $router;
$app->blade = $blade;
$app->db = $pdo;

// ฟังก์ชัน VIEW เพื่อใช้ใน Controller
function VIEW($view, $data = []) {
    global $app;
    echo $app->blade->render($view, $data);
}

$router->get('/files/{name}/{extension}', function($name,$extension) {
    $filesDir = __DIR__ . '/../files/';  // กำหนดเส้นทางไปยังโฟลเดอร์ที่เก็บไฟล์

    $filepath = realpath($filesDir . $name.".".$extension);

    if ($filepath && file_exists($filepath)) {
        sendFile($filepath, mime_content_type($filepath));
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'File not found']);
        exit;
    }
});

function sendFile($filepath, $contentType) {
    if (file_exists($filepath)) {
        header('Content-Type: ' . $contentType);
        readfile($filepath);
        exit;
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'File not found']);
        exit;
    }
}


return $app;
