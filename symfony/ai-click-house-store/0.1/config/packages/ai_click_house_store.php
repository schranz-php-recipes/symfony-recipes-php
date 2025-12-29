<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'clickhouse' => [
                'default' => [
                    'dsn' => '%env(CLICKHOUSE_DSN)%',
                    'database' => 'default',
                ],
            ],
        ],
    ]);
};
