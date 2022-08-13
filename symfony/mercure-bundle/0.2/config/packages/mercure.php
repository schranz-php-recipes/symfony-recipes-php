<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mercure', [
        'enable_profiler' => '%kernel.debug%',
        'hubs' => [
            'default' => [
                'url' => '%env(MERCURE_PUBLISH_URL)%',
                'jwt' => '%env(MERCURE_JWT_TOKEN)%',
            ],
        ],
    ]);
};
