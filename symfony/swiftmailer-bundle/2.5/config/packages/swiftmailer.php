<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('swiftmailer', [
        'url' => '%env(MAILER_URL)%',
        'spool' => [
            'type' => 'memory',
        ],
    ]);
};
