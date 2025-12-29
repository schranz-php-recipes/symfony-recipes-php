<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ai', [
        'store' => [
            'pinecone' => [
                'default' => [
                    'api_key' => '%env(PINECONE_API_KEY)%',
                    'index_host' => '%env(PINECONE_INDEX_HOST)%',
                ],
            ],
        ],
    ]);
};
