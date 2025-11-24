<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set('Symfony\AI\Agent\Bridge\SerpApi\SerpAPi')
        ->arg('$apiKey', '%env(SERP_API_API_KEY)%');
};
