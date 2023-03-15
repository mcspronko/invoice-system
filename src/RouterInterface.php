<?php declare(strict_types=1);

namespace Invoice;

use Invoice\Controller\ActionInterface;

interface RouterInterface
{
    public function get(string $path, string $callback): void;
    public function dispatch(RequestInterface $request): ActionInterface;
}
