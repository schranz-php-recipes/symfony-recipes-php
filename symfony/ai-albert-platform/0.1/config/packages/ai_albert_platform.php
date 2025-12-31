<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'albert' => [
                'api_key' => '%env(ALBERT_API_KEY)%',
                'base_url' => '%env(ALBERT_BASE_URL)%',
            ],
        ],
    ]);
};
