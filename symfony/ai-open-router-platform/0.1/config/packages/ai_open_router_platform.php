<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'openrouter' => [
                'api_key' => '%env(OPENROUTER_API_KEY)%',
            ],
        ],
    ]);
};
