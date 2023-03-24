<?php declare(strict_types=1);

namespace Invoice;

class Response implements ResponseInterface
{
    private string $template;

    public function __construct(
        private readonly string $templateDir,
        private array $vars = []
    ) {}

    public function template(string $name, array $vars = []): void
    {
        $this->addVars($vars);
        $this->template = $this->templateDir . '/' . $name . '.php';
    }

    public function addVars(array $vars): void
    {
        $this->vars = array_merge($this->vars, $vars);
    }

    public function render(): void
    {
        if (empty($this->template)) {
            return;
        }
        ob_start();

        extract($this->vars, EXTR_SKIP);
        include $this->template;
        $output = ob_get_clean();
        echo $output;
    }
}
