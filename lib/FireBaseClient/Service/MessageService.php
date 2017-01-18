<?php

namespace FireBaseClient\Service;

use FireBaseClient\Model\Message;
use Itav\Component\Serializer\Serializer;
use PrestaShopClient\Service\ServiceInterface;

class MessageService implements ServiceInterface
{

    /**
     * @var Service
     */
    private $service;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * MessageService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

    public function send(Message $message)
    {

    }
}