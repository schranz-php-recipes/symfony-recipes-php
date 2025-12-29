<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'azuresearch' => [
                'default' => [
                    'endpoint' => '%env(AZURE_SEARCH_ENDPOINT)%',
                    'api_key' => '%env(AZURE_SEARCH_API_KEY)%',
                    'api_version' => '2024-07-01',
                ],
            ],
        ],
    ]);
};
