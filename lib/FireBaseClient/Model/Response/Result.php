<?php

namespace FireBaseClient\Model\Response;

/**
 * Class Result
 * @package FireBaseClient\Model\Response
 */
class Result
{

    /**
     * String specifying a unique ID for each successfully processed message.
     * @var string
     */
    private $message_id;

    /**
     * Optional string specifying the canonical registration token for the client app that the message was processed and sent to.
     * Sender should use this value as the registration token for future requests.
     * Otherwise, the messages might be rejected.
     * @var string
     */
    private $registration_id;

    /**
     * String specifying the error that occurred when processing the message for the recipient.
     * @see https://firebase.google.com/docs/cloud-messaging/http-server-ref#table9
     * @var string
     */
    private $error;

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * @param string $message_id
     * @return Result
     */
    public function setMessageId($message_id)
    {
        $this->message_id = $message_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->registration_id;
    }

    /**
     * @param string $registration_id
     * @return Result
     */
    public function setRegistrationId($registration_id)
    {
        $this->registration_id = $registration_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return Result
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}