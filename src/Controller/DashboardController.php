<?php declare(strict_types=1);

namespace Invoice\Controller;

use Invoice\RequestInterface;
use Invoice\ResponseInterface;

class DashboardController implements ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->template('page/dashboard');
        return $response;
    }
}
