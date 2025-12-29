<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'supabase' => [
                'default' => [
                    'url' => '%env(SUPABASE_URL)%',
                    'api_key' => '%env(SUPABASE_API_KEY)%',
                ],
            ],
        ],
    ]);
};
