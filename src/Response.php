<?php declare(strict_types=1);

namespace Invoice;

class Response implements ResponseInterface
{
    private string $template;

    public function __construct(private readonly string $templateDir) {}

    public function template(string $name): void
    {
        $this->template = $this->templateDir . '/' . $name . '.php';
    }

    public function render(): void
    {
        if (empty($this->template)) {
            return;
        }
        ob_start();
        include $this->template;
        $output = ob_get_clean();
        echo $output;
    }
}
