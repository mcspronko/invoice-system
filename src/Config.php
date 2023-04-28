<?php declare(strict_types=1);

namespace Invoice;

class Config
{
    private array $config;

    public function __construct()
    {
        $this->config = require __DIR__ . '/../config.php';
    }

    public function getConfig(string $section): array
    {
        return $this->config[$section] ?? [];
    }
}
