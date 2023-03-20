<?php declare(strict_types=1);

namespace Invoice\Controller;

use Invoice\RequestInterface;
use Invoice\ResponseInterface;

interface ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface;
}
