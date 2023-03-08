<?php declare(strict_types=1);

namespace Invoice;

class App
{
    public function run(): void
    {
        $router = new Router();

        $request = new Request();
        $handler = $router->dispatch($request);

        if ($handler) {
            $handler();
        }
    }
}
