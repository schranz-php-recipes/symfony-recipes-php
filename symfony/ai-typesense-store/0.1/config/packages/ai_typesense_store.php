<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'typesense' => [
                'default' => [
                    'host' => '%env(TYPESENSE_HOST)%',
                    'port' => '%env(int:TYPESENSE_PORT)%',
                    'api_key' => '%env(TYPESENSE_API_KEY)%',
                ],
            ],
        ],
    ]);
};
