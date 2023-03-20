<?php declare(strict_types=1);

namespace Invoice;

class App
{
    public function run(): void
    {
        $router = new Router();

        $routesList = new RoutesList();
        $routesList->configure($router);

        $request = new Request();
        $handler = $router->dispatch($request);

        $response = new Response(
            dirname(__DIR__) . '/templates'
        );

        $response = $handler($request, $response);
        $response->render();
    }
}
