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
namespace Hyperf\Hykafka\IO;

use Hyperf\Hykafka\Params;
use PhpAmqpLib\Wire\IO\AbstractIO;

interface IOFactoryInterface
{
    public function create(array $config, Params $params): AbstractIO;
}
