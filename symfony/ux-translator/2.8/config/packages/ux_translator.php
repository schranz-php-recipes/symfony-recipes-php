<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ux_translator', [
        'dump_directory' => '%kernel.project_dir%/var/translations',
    ]);
};
