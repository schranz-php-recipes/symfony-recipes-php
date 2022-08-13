<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('scheb_two_factor', [
        'security_tokens' => ['Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken'],
    ]);
};
