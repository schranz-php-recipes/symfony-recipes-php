<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('zenstruck_foundry', [
            'auto_refresh_proxies' => true,
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('zenstruck_foundry', [
            'auto_refresh_proxies' => true,
        ]);
    }
};
