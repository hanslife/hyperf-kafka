<?php
require __DIR__.'/vendor/autoload.php';
use Hyperf\Hykafka\Annotation\Producer as Producer2;
use Hyperf\Hykafka\Message\ProducerMessage;
use Hyperf\Hykafka\Producer;
use Hyperf\Di\Container;
use Hyperf\Di\Definition\DefinitionSourceFactory;
use Hyperf\Utils\ApplicationContext;

#[Producer2(exchange: 'hyperf', routingKey: 'hyperf')]
class DemoProducer extends ProducerMessage
{
    public function __construct($data)
    {
        $this->payload = $data;
    }
}
! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));
class aa
{
    public function bb()
    {
        $message = new DemoProducer(['a' => 1, 'b' => 2]);

        $container = new Container((new DefinitionSourceFactory(true))());
        ApplicationContext::setContainer($container); var_dump($container, 123);exit;
        $producer = ApplicationContext::getContainer()->get(Producer::class);
        var_dump($producer, 123);exit;
        $result = $producer->produce($message);

        var_dump(123, $result);exit;
    }
}
$a = (new aa())->bb();
var_dump($a);exit;
////反射api
//$reflector = new \ReflectionClass(DemoProducer::class);
//$attrs = $reflector->getAttributes()[0]->newInstance();
//var_dump($attrs);exit;