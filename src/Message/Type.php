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

class Type
{
    public const DIRECT = 'direct';

    public const FANOUT = 'fanout';

    public const TOPIC = 'topic';

    public static function all()
    {
        return [
            self::DIRECT,
            self::FANOUT,
            self::TOPIC,
        ];
    }
}
