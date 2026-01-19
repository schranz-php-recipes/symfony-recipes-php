<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('doctrine_mongodb', [
        'auto_generate_proxy_classes' => true,
        'auto_generate_hydrator_classes' => true,
        'connections' => [
            'default' => [
                'server' => '%env(MONGODB_URI)%',
                'options' => [],
            ],
        ],
        'default_database' => '%env(MONGODB_DB)%',
        'document_managers' => [
            'default' => [
                'auto_mapping' => true,
                'mappings' => [
                    'App' => [
                        'is_bundle' => false,
                        'dir' => '%kernel.project_dir%/src/Document',
                        'prefix' => 'App\Document',
                        'alias' => 'App',
                    ],
                ],
            ],
        ],
    ]);
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('doctrine_mongodb', [
            'auto_generate_proxy_classes' => false,
            'auto_generate_hydrator_classes' => false,
            'document_managers' => [
                'default' => [
                    'metadata_cache_driver' => [
                        'type' => 'service',
                        'id' => 'doctrine_mongodb.system_cache_pool',
                    ],
                ],
            ],
        ]);
        $containerConfigurator->extension('framework', [
            'cache' => [
                'pools' => [
                    'doctrine_mongodb.system_cache_pool' => [
                        'adapter' => 'cache.system',
                    ],
                ],
            ],
        ]);
    }
};
