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
namespace Hanslife\Hykafka\Message;

use Hanslife\Hykafka\Builder\QueueBuilder;

interface RpcMessageInterface extends MessageInterface
{
    public function getQueueBuilder(): QueueBuilder;
}
