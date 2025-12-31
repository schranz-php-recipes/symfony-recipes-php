<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'azure' => [
                'api_key' => '%env(AZURE_API_KEY)%',
                'base_url' => '%env(AZURE_BASE_URL)%',
                'deployment' => '%env(AZURE_DEPLOYMENT)%',
            ],
        ],
    ]);
};
