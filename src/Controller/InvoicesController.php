<?php declare(strict_types=1);

namespace Invoice\Controller;

use Invoice\Entity\InvoiceRepository;
use Invoice\RequestInterface;
use Invoice\ResponseInterface;

class InvoicesController implements ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $invoices = (new InvoiceRepository())->load();
        $response->template(
            'page/invoices',
            [
                'title' => 'Invoices',
                'invoices' => $invoices
            ]
        );
        return $response;
    }
}
