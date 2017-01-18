<?php

namespace FireBaseClient\Service;

use GuzzleHttp\Client;
use Tools\Tools;

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

    public function request()
    {
        if (!$this->getApiKey()) {
            throw new \Exception('Api key missing.');
        }


        try {
            $test = $this->client->request(
                self::REQUEST_METHOD_POST,
                '',
                [
                    'headers' => [
                        'Authorization' => 'key=' . $this->getApiKey()
                    ],
                    'json' => json_encode($this->getMessage())
                ]
            );
        } catch (\Exception $exception) {
            Tools::dump(0, $exception->getCode());
            Tools::dump(1, $exception->getMessage());
        }

        Tools::dump(0, $test->getReasonPhrase());
        Tools::dump(0, $test->getBody()->getContents());
        Tools::dump(1, $test->getStatusCode());
    }

}