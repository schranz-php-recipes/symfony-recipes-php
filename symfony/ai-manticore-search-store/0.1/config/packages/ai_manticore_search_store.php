<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'manticoresearch' => [
                'default' => [
                    'host' => '%env(MANTICORESEARCH_HOST)%',
                    'port' => '%env(int:MANTICORESEARCH_PORT)%',
                ],
            ],
        ],
    ]);
};
