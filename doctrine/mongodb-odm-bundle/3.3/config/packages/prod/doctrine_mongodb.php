<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('doctrine_mongodb', [
        'auto_generate_proxy_classes' => false,
        'auto_generate_hydrator_classes' => false,
        'document_managers' => [
            'default' => [
                'metadata_cache_driver' => [
                    'type' => 'service',
                    'id' => 'doctrine_mongodb.system_cache_provider',
                ],
            ],
        ],
    ]);

    $services = $containerConfigurator->services();

    $services->set('doctrine_mongodb.system_cache_provider', 'Symfony\Component\Cache\DoctrineProvider')
        ->private()
        ->args([service('doctrine_mongodb.system_cache_pool')]);

    $containerConfigurator->extension('framework', [
        'cache' => [
            'pools' => [
                'doctrine_mongodb.system_cache_pool' => [
                    'adapter' => 'cache.system',
                ],
            ],
        ],
    ]);
};
