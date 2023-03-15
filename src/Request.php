<?php declare(strict_types=1);

namespace Invoice;

class Request implements RequestInterface
{
    private array $server;

    public function __construct()
    {
        $this->server = $_SERVER;
    }

    public function getServer(string $name): mixed
    {
        return $this->server[$name] ?? null;
    }

    public function getUri(): array
    {
        return parse_url($this->getServer('REQUEST_URI'));
    }

    public function getPath(): string
    {
        $uri = $this->getUri();
        return $uri['path'];
    }

    public function getMethod(): string
    {
        return $this->getServer('REQUEST_METHOD');
    }
}
