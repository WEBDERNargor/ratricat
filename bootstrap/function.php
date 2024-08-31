<?php
function pre_r($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function loadEnv($path) {
    if (!file_exists($path)) {
        throw new Exception('.env file not found');
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue; // Skip comments
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        // Remove surrounding quotes if any
        $value = trim($value, "'\"");

        // Set environment variable
        putenv(sprintf('%s=%s', $name, $value));
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
    }
}

function URL()
{
    global $config;
    return isset($config['url']) ? $config['url'] : '';
}

// Function to add a route and store its name
function addRoute($method, $route, $name, $callback) {
    $config=require_once __DIR__ . '/../config/general.php';
    $url = $config['url'].$route;
    $GLOBALS['routerlist'][] =["method"=>$method,"route"=>$route,"name"=>$name,"url"=>$url];
    $GLOBALS['router']->$method($route, $callback);
   
}

