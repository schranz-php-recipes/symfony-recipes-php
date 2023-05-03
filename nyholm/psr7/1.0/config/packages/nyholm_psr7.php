<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->alias('Psr\Http\Message\RequestFactoryInterface', 'nyholm.psr7.psr17_factory');

    $services->alias('Psr\Http\Message\ResponseFactoryInterface', 'nyholm.psr7.psr17_factory');

    $services->alias('Psr\Http\Message\ServerRequestFactoryInterface', 'nyholm.psr7.psr17_factory');

    $services->alias('Psr\Http\Message\StreamFactoryInterface', 'nyholm.psr7.psr17_factory');

    $services->alias('Psr\Http\Message\UploadedFileFactoryInterface', 'nyholm.psr7.psr17_factory');

    $services->alias('Psr\Http\Message\UriFactoryInterface', 'nyholm.psr7.psr17_factory');

    $services->set('nyholm.psr7.psr17_factory', 'Nyholm\Psr7\Factory\Psr17Factory');
};
