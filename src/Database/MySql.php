<?php declare(strict_types=1);

namespace Invoice\Database;

use Invoice\Config;
use PDO;

class MySql
{
    private static ?PDO $pdo = null;

    public static function connect(): PDO
    {
        if (null === self::$pdo) {
            $config = (new Config())->getConfig('database');
            self::$pdo = new PDO(
                sprintf(
                    'mysql:host=%s;dbname=%s',
                    $config['host'],
                    $config['database']
                ),
                $config['username'],
                $config['password']
            );
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return self::$pdo;
    }
}