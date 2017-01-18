<?php

use FireBaseClient\Service\MessageService;
use FireBaseClient\Service\Service;
use Itav\Component\Serializer\Serializer;

class FireBaseClient
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
     * @var MessageService
     */
    public $message;

    /**
     * FireBaseClient constructor.
     */
    public function __construct()
    {
        $this->service = new Service();
        $this->serializer = new Serializer();
        $this->message = new MessageService($this->service, $this->serializer);
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->service->getApiKey();
    }

    /**
     * @param string $apiKey
     * @return FireBaseClient
     */
    public function setApiKey($apiKey)
    {
        $this->service->setApiKey($apiKey);
        return $this;
    }

}