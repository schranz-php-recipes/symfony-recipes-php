<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ux_icons', [
        'default_icon_attributes' => [
            'fill' => 'currentColor',
            'height' => '1em',
            'width' => '1em',
        ],
        'ignore_not_found' => false,
    ]);
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('ux_icons', [
            'ignore_not_found' => true,
        ]);
    }
};
