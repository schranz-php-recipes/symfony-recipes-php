<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'neo4j' => [
                'default' => [
                    'uri' => '%env(NEO4J_URI)%',
                    'username' => '%env(NEO4J_USERNAME)%',
                    'password' => '%env(NEO4J_PASSWORD)%',
                ],
            ],
        ],
    ]);
};
