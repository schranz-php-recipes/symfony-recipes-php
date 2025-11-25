<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'openai' => [
                'api_key' => '%env(OPENAI_API_KEY)%',
            ],
        ],
        'agent' => [
            'default' => [
                'platform' => 'ai.platform.openai',
                'model' => 'gpt-5-mini',
                'prompt' => 'You are a pirate and you write funny.
',
            ],
        ],
    ]);
};
