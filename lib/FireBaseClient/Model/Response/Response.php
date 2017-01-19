<?php

namespace FireBaseClient\Model\Response;

/**
 * Class Response
 * @package FireBaseClient\Model\Response
 */
class Response
{
    /**
     * Unique ID (number) identifying the multicast message.
     * @var integer
     */
    private $multicast_id;

    /**
     * Number of messages that were processed without an error.
     * @var integer
     */
    private $success;

    /**
     * Number of messages that could not be processed.
     * @var integer
     */
    private $failure;

    /**
     * Number of results that contain a canonical registration token.
     * A canonical registration ID is the registration token of the last registration requested by the client app.
     * This is the ID that the server should use when sending messages to the device.
     * @var integer
     */
    private $canonical_ids;

    /**
     * Array of objects representing the status of the messages processed.
     * The objects are listed in the same order as the request (i.e., for each registration ID in the request, its result is listed in the same index in the response).
     * @var Result[]
     */
    private $results;

    /**
     * @return int
     */
    public function getMulticastId()
    {
        return $this->multicast_id;
    }

    /**
     * @param int $multicast_id
     * @return Response
     */
    public function setMulticastId($multicast_id)
    {
        $this->multicast_id = $multicast_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param int $success
     * @return Response
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return int
     */
    public function getFailure()
    {
        return $this->failure;
    }

    /**
     * @param int $failure
     * @return Response
     */
    public function setFailure($failure)
    {
        $this->failure = $failure;
        return $this;
    }

    /**
     * @return int
     */
    public function getCanonicalIds()
    {
        return $this->canonical_ids;
    }

    /**
     * @param int $canonical_ids
     * @return Response
     */
    public function setCanonicalIds($canonical_ids)
    {
        $this->canonical_ids = $canonical_ids;
        return $this;
    }

    /**
     * @return Result[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param Result[] $results
     * @return Response
     */
    public function setResults($results)
    {
        $this->results = $results;
        return $this;
    }
}