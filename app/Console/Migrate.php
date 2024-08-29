<?php

namespace App\Console;

class Migrate
{
    protected $pdo;
    protected $migrationsPath;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->migrationsPath = __DIR__ . '/../../database/migrations/';
    }

    public function migrate()
    {
        $files = glob($this->migrationsPath . '*.php');

        foreach ($files as $file) {
            $migration = include $file;
            $migration['up']($this->pdo);
            echo "Migrated: " . basename($file) . PHP_EOL;
        }
    }

    public function rollback()
    {
        $files = array_reverse(glob($this->migrationsPath . '*.php'));

        foreach ($files as $file) {
            $migration = include $file;
            $migration['down']($this->pdo);
            echo "Rolled back: " . basename($file) . PHP_EOL;
        }
    }
}
