<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'platform' => [
            'vertexai' => [
                'project_id' => '%env(VERTEX_AI_PROJECT_ID)%',
                'location' => '%env(VERTEX_AI_LOCATION)%',
            ],
        ],
    ]);
};
