<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('framework', [
        'uid' => [
            'default_uuid_version' => 7,
            'time_based_uuid_version' => 7,
        ],
    ]);
};
