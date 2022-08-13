<?php

declare(strict_types=1);

use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->alias('Symfony\Bridge\PsrHttpMessage\HttpFoundationFactoryInterface', 'Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory');

    $services->alias('Symfony\Bridge\PsrHttpMessage\HttpMessageFactoryInterface', 'Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory');

    $services->set(HttpFoundationFactory::class);

    $services->set(PsrHttpFactory::class);
};
