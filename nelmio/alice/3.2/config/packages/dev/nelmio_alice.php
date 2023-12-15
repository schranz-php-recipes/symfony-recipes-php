<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nelmio_alice', [
        'functions_blacklist' => [
            'current',
            'shuffle',
            'date',
            'time',
            'file',
            'md5',
            'sha1',
        ],
    ]);
};
