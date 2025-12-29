<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'meilisearch' => [
                'default' => [
                    'host' => '%env(MEILISEARCH_HOST)%',
                    'api_key' => '%env(MEILISEARCH_API_KEY)%',
                ],
            ],
        ],
    ]);
};
