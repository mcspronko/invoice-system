<?php declare(strict_types=1);

namespace Invoice\Controller;

use Invoice\RequestInterface;
use Invoice\ResponseInterface;

class PageNotFoundController implements ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        http_response_code(404);
        $response->template('page/not-found');
        return $response;
    }
}
