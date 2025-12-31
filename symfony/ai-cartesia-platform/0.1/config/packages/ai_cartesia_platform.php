<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'cartesia' => [
                'api_key' => '%env(CARTESIA_API_KEY)%',
                'version' => '%env(CARTESIA_VERSION)%',
            ],
        ],
    ]);
};
