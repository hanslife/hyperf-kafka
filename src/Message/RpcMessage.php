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
use Hanslife\Hykafka\Packer\Packer;
use Hyperf\Utils\ApplicationContext;

abstract class RpcMessage extends Message implements RpcMessageInterface
{
    protected string $queue = '';

    /**
     * @var mixed
     */
    protected $payload;

    public function getQueueBuilder(): QueueBuilder
    {
        return (new QueueBuilder())->setQueue($this->queue)
            ->setExclusive(true)
            ->setPassive(false)
            ->setDurable(false)
            ->setAutoDelete(false);
    }

    public function payload(): string
    {
        return $this->serialize();
    }

    public function serialize(): string
    {
        $packer = ApplicationContext::getContainer()->get(Packer::class);
        return $packer->pack($this->payload);
    }

    public function unserialize(string $data)
    {
        $packer = ApplicationContext::getContainer()->get(Packer::class);
        return $packer->unpack($data);
    }
}
