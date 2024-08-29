<?php

$directory = __DIR__ . '/../database/migrations/';
if (!is_dir($directory)) {
    mkdir($directory, 0777, true);
}

$prefix = date('Y_m_d_His');
$filename = $prefix . 'create_table_name.php'; // เปลี่ยน "create_table_name" เป็นชื่อที่คุณต้องการ

$template = <<<EOT
<?php

return [
    'up' => function(\$pdo) {
        \$sql = "CREATE TABLE table_name (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        \$pdo->exec(\$sql);
    },
    'down' => function(\$pdo) {
        \$sql = "DROP TABLE table_name";
        \$pdo->exec(\$sql);
    }
];
EOT;

file_put_contents($directory . $filename, $template);

echo "Migration file created: " . $filename . PHP_EOL;
