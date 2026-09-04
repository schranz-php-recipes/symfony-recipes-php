<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('league_oauth2_server', [
        'authorization_server' => [
            'private_key' => '%env(resolve:OAUTH_PRIVATE_KEY)%',
            'private_key_passphrase' => '%env(resolve:OAUTH_PASSPHRASE)%',
            'encryption_key' => '%env(resolve:OAUTH_ENCRYPTION_KEY)%',
            'enable_password_grant' => false,
            'enable_implicit_grant' => false,
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
        'client' => [
            'allow_plaintext_secrets' => false,
        ],
    ]);
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('league_oauth2_server', [
            'persistence' => [
                'in_memory' => null,
            ],
        ]);
        $containerConfigurator->extension('services', [
            'league.oauth2_server.password_hasher' => [
                'class' => 'Symfony\Component\PasswordHasher\Hasher\NativePasswordHasher',
                'arguments' => [
                    '$cost' => 4,
                ],
            ],
        ]);
    }
};
