<?php

namespace FireBaseClient\Service;

use FireBaseClient\Model\Message;
use Itav\Component\Serializer\Serializer;

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

    /**
     * @param Message $message
     */
    public function send(Message $message)
    {
        $this->service
            ->setMessage($this->serializer->normalize($message))
            ->request();
    }
}