<?php declare(strict_types=1);

namespace Invoice;

interface RequestInterface
{
    public function getPath(): string;
    public function getMethod(): string;
}
