<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nelmio_security', [
        'clickjacking' => [
            'paths' => [
                '^/.*' => 'DENY',
            ],
        ],
        'content_type' => [
            'nosniff' => true,
        ],
        'xss_protection' => [
            'enabled' => true,
            'mode_block' => true,
        ],
        'referrer_policy' => [
            'enabled' => true,
            'policies' => ['no-referrer', 'strict-origin-when-cross-origin'],
        ],
    ]);
};
