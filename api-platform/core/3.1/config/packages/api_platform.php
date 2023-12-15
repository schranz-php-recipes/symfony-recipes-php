<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('api_platform', [
        'title' => 'Hello API Platform',
        'version' => '1.0.0',
        'defaults' => [
            'stateless' => true,
            'cache_headers' => [
                'vary' => [
                    'Content-Type',
                    'Authorization',
                    'Origin',
                ],
            ],
            'extra_properties' => [
                'standard_put' => true,
            ],
        ],
    ]);
};
