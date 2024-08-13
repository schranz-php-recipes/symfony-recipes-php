<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ux_map', [
        'renderer' => '%env(resolve:default::UX_MAP_DSN)%',
    ]);
};
