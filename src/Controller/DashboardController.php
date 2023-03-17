<?php declare(strict_types=1);

namespace Invoice\Controller;

class DashboardController implements ActionInterface
{
    public function __invoke()
    {
        echo 'Dashboard Page';
    }
}
