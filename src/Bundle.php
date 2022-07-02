<?php

namespace ZnUser\Confirm;

use ZnCore\Base\Bundle\Base\BaseBundle;

class Bundle extends BaseBundle
{

    public function i18next(): array
    {
        return [
            'user' => 'vendor/znuser/confirm/src/Domain/i18next/__lng__/__ns__.json',
        ];
    }

    public function migration(): array
    {
        return [
            '/vendor/znuser/confirm/src/Domain/Migrations',
        ];
    }

    public function container(): array
    {
        return [
            __DIR__ . '/Domain/config/container.php',
        ];
    }
}
