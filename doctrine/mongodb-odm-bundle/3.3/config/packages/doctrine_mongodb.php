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
                        'type' => 'annotation',
                        'dir' => '%kernel.project_dir%/src/Document',
                        'prefix' => 'App\Document',
                        'alias' => 'App',
                    ],
                ],
            ],
        ],
    ]);
};
