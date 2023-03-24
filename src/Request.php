<?php declare(strict_types=1);

namespace Invoice;

class Request implements RequestInterface
{
    private array $server;
    private array $params = [];

    public function __construct()
    {
        $this->server = $_SERVER;
        $this->addParams($this->getQueryParams());
        $this->addParams($_POST);
    }

    private function addParams(array $params): void
    {
        $this->params = array_merge($this->params, $params);
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

    public function getParam(string $name): mixed
    {
        return $this->params[$name] ?? null;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function getQuery(): ?string
    {
        $uri = $this->getUri();
        return $uri['query'] ?? null;
    }

    public function getQueryParams(): array
    {
        $params = [];
        if ($this->getQuery()) {
            parse_str($this->getQuery(), $params);
        }
        return $params;
    }
}
