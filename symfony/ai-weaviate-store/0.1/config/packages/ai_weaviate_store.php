<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'weaviate' => [
                'default' => [
                    'host' => '%env(WEAVIATE_HOST)%',
                    'api_key' => '%env(WEAVIATE_API_KEY)%',
                ],
            ],
        ],
    ]);
};
