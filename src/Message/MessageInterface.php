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

use Hanslife\Hykafka\Builder\ExchangeBuilder;

interface MessageInterface
{
    /**
     * Pool name for amqp2.
     */
    public function getPoolName(): string;

    public function setType(string $type);

    public function getType(): string;

    public function setExchange(string $exchange);

    public function getExchange(): string;

    public function setRoutingKey($routingKey);

    public function getRoutingKey(): array|string;

    public function getExchangeBuilder(): ExchangeBuilder;

    /**
     * Serialize the message body to a string.
     */
    public function serialize(): string;

    /**
     * Unserialize the message body.
     */
    public function unserialize(string $data);
}
