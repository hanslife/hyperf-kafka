<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hanslife\Hykafka\IO\IOFactory;

return [
    'enable' => true,
    'default' => [
        'host'       => '81.69.226.117',
        'port'       => 5672,
        'user'       => 'admin',
        'password'   => 'hans123456',
        'vhost'      => '/',
        'open_ssl' => false,
        'concurrent' => [
            'limit' => 2,
        ],
        'pool' => [
            'connections' => 2,
        ],
        'io' => IOFactory::class,
        'params' => [
            'insist' => false,
            'login_method' => 'AMQPLAIN',
            'login_response' => null,
            'locale' => 'en_US',
            'connection_timeout' => 3,
            'read_write_timeout' => 6,
            'context' => null,
            'keepalive' => true,
            'heartbeat' => 3,
            'channel_rpc_timeout' => 0.0,
            'close_on_destruct' => false,
            'max_idle_channels' => 10,
        ],
    ],
];
