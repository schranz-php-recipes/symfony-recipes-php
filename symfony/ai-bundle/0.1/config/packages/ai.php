<?php

declare(strict_types=1);

use Symfony\AI\Agent\Toolbox\Tool\Clock;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set(Clock::class);

    $containerConfigurator->extension('ai', [
        'platform' => [
            'openai' => [
                'api_key' => '%env(OPENAI_API_KEY)%',
            ],
        ],
        'agent' => [
            'default' => [
                'platform' => 'ai.platform.openai',
                'model' => [
                    'class' => 'Symfony\AI\Platform\Bridge\OpenAI\GPT',
                    'name' => 'gpt-4o-mini',
                ],
                'system_prompt' => 'You are a helpful assistant and you can provide the current date and time.
',
                'tools' => ['Symfony\AI\Agent\Toolbox\Tool\Clock'],
            ],
        ],
    ]);
};
