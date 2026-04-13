<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'amazeeai' => [
                'base_url' => '%env(AMAZEEAI_LLM_API_URL)%',
                'api_key' => '%env(AMAZEEAI_LLM_KEY)%',
            ],
        ],
    ]);
};
