<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'mongodb' => [
                'default' => [
                    'uri' => '%env(MONGODB_URI)%',
                    'database' => 'my_database',
                    'index_name' => 'vector_index',
                ],
            ],
        ],
    ]);
};
