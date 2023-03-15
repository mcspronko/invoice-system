<?php declare(strict_types=1);

namespace Invoice;

interface ResponseInterface
{
    public function template(string $name): void;
    public function render(): void;
}
