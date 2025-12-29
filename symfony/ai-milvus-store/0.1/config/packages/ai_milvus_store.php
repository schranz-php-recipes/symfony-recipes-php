<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'milvus' => [
                'default' => [
                    'host' => '%env(MILVUS_HOST)%',
                    'port' => '%env(int:MILVUS_PORT)%',
                ],
            ],
        ],
    ]);
};
