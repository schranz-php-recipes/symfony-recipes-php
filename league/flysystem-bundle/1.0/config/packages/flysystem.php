<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('flysystem', [
        'storages' => [
            'default.storage' => [
                'adapter' => 'local',
                'options' => [
                    'directory' => '%kernel.project_dir%/%VAR_DIR%/storage/default',
                ],
            ],
        ],
    ]);
};
