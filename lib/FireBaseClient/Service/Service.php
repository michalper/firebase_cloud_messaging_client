<?php

namespace FireBaseClient\Service;


use GuzzleHttp\Client;

class Service
{

    const BASE_URL = 'https://fcm.googleapis.com/fcm/send';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Client
     */
    private $client;

    /**
     * Service constructor.
     */
    public function __construct()
    {
        $this->client = new Client(
            [
                'base_uri' => self::BASE_URL,
                'http_errors' => false,
                'headers' => [
                    'Content-Type' => 'application/json'
                ]
            ]
        );

    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return Service
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }




}