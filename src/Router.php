<?php declare(strict_types=1);

namespace Invoice;

class Router
{
    public function dispatch(Request $request): mixed
    {
        $path = $request->getPath();

        $routes = [
            '/' => function () {
                echo 'Home Page';
            },
            '/invoices' => function () {
                echo 'Invoices';
            },
            '/settings' => function () {
                echo 'Settings';
            }
        ];

        return $routes[$path] ?? null;
    }
}
