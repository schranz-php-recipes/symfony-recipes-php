<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'cerebras' => [
                'api_key' => '%env(CEREBRAS_API_KEY)%',
            ],
        ],
    ]);
};
