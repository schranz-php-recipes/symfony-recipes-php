<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('framework', [
        'messenger' => [
            'failure_transport' => 'failed',
            'transports' => [
                'async' => [
                    'dsn' => '%env(MESSENGER_TRANSPORT_DSN)%',
                    'retry_strategy' => [
                        'max_retries' => 3,
                        'multiplier' => 2,
                    ],
                ],
                'failed' => 'doctrine://default?queue_name=failed',
            ],
            'default_bus' => 'messenger.bus.default',
            'buses' => [
                'messenger.bus.default' => [],
            ],
            'routing' => [
                'Symfony\Component\Mailer\Messenger\SendEmailMessage' => 'async',
                'Symfony\Component\Notifier\Message\ChatMessage' => 'async',
                'Symfony\Component\Notifier\Message\SmsMessage' => 'async',
            ],
        ],
    ]);
};
