<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('league_oauth2_server', [
        'authorization_server' => [
            'private_key' => '%env(resolve:OAUTH_PRIVATE_KEY)%',
            'private_key_passphrase' => '%env(resolve:OAUTH_PASSPHRASE)%',
            'encryption_key' => '%env(resolve:OAUTH_ENCRYPTION_KEY)%',
        ],
        'resource_server' => [
            'public_key' => '%env(resolve:OAUTH_PUBLIC_KEY)%',
        ],
        'scopes' => [
            'available' => ['email'],
            'default' => ['email'],
        ],
        'persistence' => [
            'doctrine' => null,
        ],
    ]);
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('league_oauth2_server', [
            'persistence' => [
                'in_memory' => null,
            ],
        ]);
    }
};
