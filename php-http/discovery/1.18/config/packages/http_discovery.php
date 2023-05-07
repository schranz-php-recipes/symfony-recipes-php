<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->alias('Psr\Http\Message\RequestFactoryInterface', 'http_discovery.psr17_factory');

    $services->alias('Psr\Http\Message\ResponseFactoryInterface', 'http_discovery.psr17_factory');

    $services->alias('Psr\Http\Message\ServerRequestFactoryInterface', 'http_discovery.psr17_factory');

    $services->alias('Psr\Http\Message\StreamFactoryInterface', 'http_discovery.psr17_factory');

    $services->alias('Psr\Http\Message\UploadedFileFactoryInterface', 'http_discovery.psr17_factory');

    $services->alias('Psr\Http\Message\UriFactoryInterface', 'http_discovery.psr17_factory');

    $services->set('http_discovery.psr17_factory', 'Http\Discovery\Psr17Factory');
};
