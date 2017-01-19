<?php

namespace FireBaseClient\Service;

use GuzzleHttp\Client;
use Tools\Tools;

/**
 * Class Service
 * @package FireBaseClient\Service
 */
class Service
{
    const REQUEST_METHOD_GET = 'GET';
    const REQUEST_METHOD_POST = 'POST';
    const REQUEST_METHOD_PUT = 'PUT';
    const REQUEST_METHOD_DELETE = 'DELETE';

    const BASE_URL = 'https://fcm.googleapis.com/fcm/send';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var array
     */
    private $message;

    /**
     * Service constructor.
     */
    public function __construct()
    {
        $this->client = new Client(
            [
                'base_uri' => self::BASE_URL,
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

    /**
     * @return array
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param array $message
     * @return Service
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    public function request()
    {
        if (!$this->getApiKey()) {
            throw new \Exception('Api key missing.');
        }

        $request = $this->client->request(
            self::REQUEST_METHOD_POST,
            '',
            [
                'headers' => [
                    'Authorization' => 'key=' . $this->getApiKey()
                ],
                'json' => $this->getMessage()
            ]
        );

       return $request;
    }

}