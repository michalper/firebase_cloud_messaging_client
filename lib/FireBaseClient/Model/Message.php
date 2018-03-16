<?php

namespace FireBaseClient\Model;

/**
 * Class Message
 * @package FireBase\Model
 * @see https://firebase.google.com/docs/cloud-messaging/http-server-ref
 */
class Message
{
    /**
     * @TARGETS
     */

    /**
     * This parameter specifies the recipient of a message.
     * The value must be a registration token, notification key, or topic. Do not set this field when sending to multiple topics. See condition.
     * @var string
     */
    private $to;

    /**
     * This parameter specifies a list of devices (registration tokens, or IDs) receiving a multicast message. It must contain at least 1 and at most 1000 registration tokens.
     * Use this parameter only for multicast messaging, not for single recipients. Multicast messages (sending to more than 1 registration tokens) are allowed using HTTP JSON format only.
     * @var array
     */
    private $registration_ids;

    /**
     * This parameter specifies a logical expression of conditions that determine the message target.
     *
     * Supported condition: Topic, formatted as "'yourTopic' in topics". This value is case-insensitive.
     * Supported operators: &&, ||. Maximum two operators per topic message supported.
     * @var string
     */
    private $condition;

    /**
     * @OPTIONS
     */

    /**
     * This parameter identifies a group of messages (e.g., with collapse_key: "Updates Available") that can be collapsed, so that only the last message gets sent when delivery can be resumed.
     * This is intended to avoid sending too many of the same messages when the device comes back online or becomes active.
     * Note that there is no guarantee of the order in which messages get sent.
     * Note: A maximum of 4 different collapse keys is allowed at any given time. This means a FCM connection server can simultaneously store 4 different send-to-sync messages per client app.
     * If you exceed this number, there is no guarantee which 4 collapse keys the FCM connection server will keep.
     * @var string
     */
    private $collapse_key;

    /**
     * Sets the priority of the message. Valid values are "normal" and "high." On iOS, these correspond to APNs priorities 5 and 10.
     *
     * By default, notification messages are sent with high priority, and data messages are sent with normal priority.
     * Normal priority optimizes the client app's battery consumption and should be used unless immediate delivery is required.
     * For messages with normal priority, the app may receive the message with unspecified delay.
     *
     * When a message is sent with high priority, it is sent immediately, and the app can wake a sleeping device and open a network connection to your server.
     * @see https://firebase.google.com/docs/cloud-messaging/concept-options#setting-the-priority-of-a-message
     * @var string
     */
    private $priority;

    /**
     * On iOS, use this field to represent content-available in the APNs payload.
     * When a notification or message is sent and this is set to true, an inactive client app is awoken.
     * On Android, data messages wake the app by default. On Chrome, currently not supported.
     * @var boolean
     */
    private $content_available;

    /**
     * This parameter specifies how long (in seconds) the message should be kept in FCM storage if the device is offline.
     * The maximum time to live supported is 4 weeks, and the default value is 4 weeks.
     * @see https://firebase.google.com/docs/cloud-messaging/concept-options#ttl
     * @var integer
     */
    private $time_to_live;

    /**
     * This parameter specifies the package name of the application where the registration tokens must match in order to receive the message.
     * @var string
     */
    private $restricted_package_name;

    /**
     * This parameter, when set to true, allows developers to test a request without actually sending a message.
     *
     * The default value is false.
     * @var boolean
     */
    private $dry_run;

    /**
     * This parameter specifies the custom key-value pairs of the message's payload.
     *
     * For example, with data:{"score":"3x1"}:
     *
     * On iOS, if the message is sent via APNS, it represents the custom data fields. If it is sent via FCM connection server, it would be represented as key value dictionary in AppDelegate application:didReceiveRemoteNotification:.
     *
     * On Android, this would result in an intent extra named score with the string value 3x1.
     *
     * The key should not be a reserved word ("from" or any word starting with "google" or "gcm"). Do not use any of the words defined in this table (such as collapse_key).
     *
     * Values in string types are recommended. You have to convert values in objects or other non-string data types (e.g., integers or booleans) to string.
     * @var mixed
     */
    private $data;

    /**
     * This parameter specifies the predefined, user-visible key-value pairs of the notification payload. See Notification payload support for detail.
     * @see https://firebase.google.com/docs/cloud-messaging/concept-options#notifications_and_data_messages
     * @var Notification
     */
    private $notification;

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     * @return Message
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return array
     */
    public function getRegistrationIds()
    {
        return $this->registration_ids;
    }

    /**
     * @param array $registration_ids
     * @return Message
     */
    public function setRegistrationIds($registration_ids)
    {
        $this->registration_ids = $registration_ids;
        return $this;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     * @return Message
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollapseKey()
    {
        return $this->collapse_key;
    }

    /**
     * @param string $collapse_key
     * @return Message
     */
    public function setCollapseKey($collapse_key)
    {
        $this->collapse_key = $collapse_key;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param string $priority
     * @return Message
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return bool
     */
    public function isContentAvailable()
    {
        return $this->content_available;
    }

    /**
     * @param bool $content_available
     * @return Message
     */
    public function setContentAvailable($content_available)
    {
        $this->content_available = $content_available;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeToLive()
    {
        return $this->time_to_live;
    }

    /**
     * @param int $time_to_live
     * @return Message
     */
    public function setTimeToLive($time_to_live)
    {
        $this->time_to_live = $time_to_live;
        return $this;
    }

    /**
     * @return string
     */
    public function getRestrictedPackageName()
    {
        return $this->restricted_package_name;
    }

    /**
     * @param string $restricted_package_name
     * @return Message
     */
    public function setRestrictedPackageName($restricted_package_name)
    {
        $this->restricted_package_name = $restricted_package_name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDryRun()
    {
        return $this->dry_run;
    }

    /**
     * @param bool $dry_run
     * @return Message
     */
    public function setDryRun($dry_run)
    {
        $this->dry_run = $dry_run;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return Message
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return Notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param Notification $notification
     * @return Message
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
        return $this;
    }
}