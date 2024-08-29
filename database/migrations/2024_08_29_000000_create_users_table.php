<?php
return [
    "up" => function ($pdo) {
        // ชื่อของฐานข้อมูลที่คุณต้องการสร้าง
        $dbName = 'phpmvc';

        // สร้างฐานข้อมูลถ้ายังไม่มีอยู่
        $pdo->exec("CREATE DATABASE IF NOT EXISTS {$dbName}");

        // ใช้ฐานข้อมูลที่สร้างขึ้นมาใหม่
        $pdo->exec("USE {$dbName}");

        // สร้างตาราง users ถ้ายังไม่มีอยู่
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(100) UNIQUE NOT NULL,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
    },

    "down" => function ($pdo) {
        // ชื่อของฐานข้อมูลที่คุณต้องการลบ
        $dbName = 'phpmvc';

        // ลบตาราง users ถ้ามีอยู่
        $pdo->exec("DROP TABLE IF EXISTS {$dbName}.users");
    }
];

