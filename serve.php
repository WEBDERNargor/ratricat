<?php
set_time_limit(0); // ปิดการจำกัดเวลาสำหรับสคริปต์นี้
$config=require __DIR__.'/config/general.php';
$parsedUrl = parse_url($config['url']);
$scheme = $parsedUrl['scheme']; // http
$host = $parsedUrl['host'];
$port = $parsedUrl['port']!=null && !empty( $parsedUrl['port'])?$parsedUrl['port']:'80';
echo "PHP Development Server started on http://{$host}:{$port}\n";
echo "Press Ctrl+C to stop the server\n";

// รัน PHP Built-in Server
$command = sprintf('php -S %s:%d -t public', $host, $port);
passthru($command);
