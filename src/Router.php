<?php declare(strict_types=1);

namespace Invoice;

use Exception;
use Invoice\Controller\ActionInterface;

class Router implements RouterInterface
{
    private const HTTP_GET = 'GET';

    public function __construct(private array $routes = []) {}

    public function get(string $path, string $callback): void
    {
        $this->routes[self::HTTP_GET][$path] = $callback;
    }

    public function dispatch(RequestInterface $request): ActionInterface
    {
        $path = $request->getPath();
        $method = $request->getMethod();

        $callback = $this->routes[$method][$path] ?? null;

        if (!$callback) {
            throw new Exception('Not found', 404);
        }

        return new $callback();
    }
}
