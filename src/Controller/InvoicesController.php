<?php declare(strict_types=1);

namespace Invoice\Controller;

class InvoicesController implements ActionInterface
{
    public function __invoke()
    {
        echo 'Invoices List Page';
    }
}
