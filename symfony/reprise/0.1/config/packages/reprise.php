<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('framework', [
        'assets' => [
            'json_manifest_path' => '%kernel.project_dir%/public/build/manifest.json',
        ],
    ]);
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('reprise', [
            'strict_mode' => false,
            'cache' => true,
        ]);
    }
};
