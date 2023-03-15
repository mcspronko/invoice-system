<?php declare(strict_types=1);

namespace Invoice\Controller;

class SettingsController implements ActionInterface
{
    public function __invoke()
    {
        echo 'Settings Page';
    }
}
