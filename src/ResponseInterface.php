<?php declare(strict_types=1);

namespace Invoice;

interface ResponseInterface
{
    public function template(string $name, array $vars = []): void;
    public function render(): void;
}
