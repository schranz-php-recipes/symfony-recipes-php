<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'perplexity' => [
                'api_key' => '%env(PERPLEXITY_API_KEY)%',
            ],
        ],
    ]);
};
