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
namespace Hanslife\Hykafka\Event;

use Hanslife\Hykafka\Message\ConsumerMessageInterface;

class AfterConsume extends ConsumeEvent
{
    public function __construct(ConsumerMessageInterface $message, protected string $result)
    {
        parent::__construct($message);
    }

    public function getResult(): string
    {
        return $this->result;
    }
}
