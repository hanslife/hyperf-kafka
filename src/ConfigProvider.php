<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hanslife\Hykafka;

use Hanslife\Hykafka\Packer\Packer;
use Hyperf\Utils\Packer\JsonPacker;
use Hanslife\Hykafka\Listener\BeforeMainServerStartListener;
use Hanslife\Hykafka\Listener\MainWorkerStartListener;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                Producer::class => Producer::class,
                Packer::class => JsonPacker::class,
                Consumer::class => ConsumerFactory::class,
            ],
            'listeners' => [
                BeforeMainServerStartListener::class => 99,
                MainWorkerStartListener::class,
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for amqp2.',
                    'source' => __DIR__ . '/../publish/amqp2.php',
                    'destination' => BASE_PATH . '/config/autoload/amqp2.php',
                ],
            ],
        ];
    }
}
