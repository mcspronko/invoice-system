<?php declare(strict_types=1);

namespace Invoice\Entity;

use Invoice\Database\MySql;
use PDO;

class InvoiceRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = (new MySql())->connect();
    }

    public function load(): array
    {
        $stmt = $this->pdo->query(
            'SELECT * FROM magemastery_invoice ORDER BY created_at DESC'
        );
        return $stmt->fetchAll();
    }
}
