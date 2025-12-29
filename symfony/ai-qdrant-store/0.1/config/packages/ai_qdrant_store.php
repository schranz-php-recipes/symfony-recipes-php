<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'qdrant' => [
                'default' => [
                    'host' => '%env(QDRANT_HOST)%',
                    'port' => '%env(int:QDRANT_PORT)%',
                ],
            ],
        ],
    ]);
};
