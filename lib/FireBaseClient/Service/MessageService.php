<?php

namespace FireBaseClient\Service;

use FireBaseClient\Model\Message;
use FireBaseClient\Model\Response\Response;
use Itav\Component\Serializer\Serializer;

/**
 * Class MessageService
 * @package FireBaseClient\Service
 */
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
     * @return Response
     */
    public function send(Message $message)
    {
        $ret = $this->service
            ->setMessage($this->serializer->normalize($message))
            ->request();

        return $this->serializer->denormalize(json_decode($ret->getBody()->getContents(), true), Response::class);
    }
}