<?php declare(strict_types=1);

namespace Invoice\Controller;

use Invoice\RequestInterface;
use Invoice\ResponseInterface;

class InvoicesController implements ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->template(
            'page/invoices',
            [
                'title' => 'Invoices From Action Controller',
                'invoice_id' => (int) $request->getParam('invoice_id')
            ]
        );
        return $response;
    }
}
