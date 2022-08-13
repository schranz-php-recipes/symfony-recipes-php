<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->add('admin', '/admin')
        ->controller('Symfony\Bundle\FrameworkBundle\Controller\TemplateController')
        ->defaults([
            'template' => 'admin.html.twig',
        ]);
};
