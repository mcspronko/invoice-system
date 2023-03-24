<?php declare(strict_types=1);

namespace Invoice;

interface RequestInterface
{
    public function getPath(): string;
    public function getMethod(): string;
    public function getParam(string $name): mixed;
    public function getParams(): array;
    public function getQuery(): ?string;
    public function getQueryParams(): array;
}
