<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('web_profiler', [
            'toolbar' => true,
        ]);
        $containerConfigurator->extension('framework', [
            'profiler' => true,
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('framework', [
            'profiler' => [
                'collect' => false,
            ],
        ]);
    }
};
