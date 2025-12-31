<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'generic' => [
                'base_url' => '%env(GENERIC_BASE_URL)%',
            ],
        ],
    ]);
};
