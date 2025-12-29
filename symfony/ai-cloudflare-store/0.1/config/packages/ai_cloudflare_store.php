<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'cloudflare' => [
                'default' => [
                    'account_id' => '%env(CLOUDFLARE_ACCOUNT_ID)%',
                    'api_key' => '%env(CLOUDFLARE_API_KEY)%',
                ],
            ],
        ],
    ]);
};
