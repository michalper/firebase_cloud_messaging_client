<?php

namespace FireBaseClient\Model;

/**
 * Class Notification
 * @package FireBase\Model
 */
class Notification
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $sound;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $badge;

    /**
     * @var string
     */
    private $click_action;

    /**
     * @var string
     */
    private $body_loc_key;

    /**
     * @var array
     */
    private $body_loc_args;

    /**
     * @var string
     */
    private $title_loc_key;

    /**
     * @var array
     */
    private $title_loc_args;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Notification
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return Notification
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return string
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @param string $sound
     * @return Notification
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return Notification
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return Notification
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Notification
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return string
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * @param string $badge
     * @return Notification
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;
        return $this;
    }

    /**
     * @return string
     */
    public function getClickAction()
    {
        return $this->click_action;
    }

    /**
     * @param string $click_action
     * @return Notification
     */
    public function setClickAction($click_action)
    {
        $this->click_action = $click_action;
        return $this;
    }

    /**
     * @return string
     */
    public function getBodyLocKey()
    {
        return $this->body_loc_key;
    }

    /**
     * @param string $body_loc_key
     * @return Notification
     */
    public function setBodyLocKey($body_loc_key)
    {
        $this->body_loc_key = $body_loc_key;
        return $this;
    }

    /**
     * @return array
     */
    public function getBodyLocArgs()
    {
        return $this->body_loc_args;
    }

    /**
     * @param array $body_loc_args
     * @return Notification
     */
    public function setBodyLocArgs($body_loc_args)
    {
        $this->body_loc_args = $body_loc_args;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitleLocKey()
    {
        return $this->title_loc_key;
    }

    /**
     * @param string $title_loc_key
     * @return Notification
     */
    public function setTitleLocKey($title_loc_key)
    {
        $this->title_loc_key = $title_loc_key;
        return $this;
    }

    /**
     * @return array
     */
    public function getTitleLocArgs()
    {
        return $this->title_loc_args;
    }

    /**
     * @param array $title_loc_args
     * @return Notification
     */
    public function setTitleLocArgs($title_loc_args)
    {
        $this->title_loc_args = $title_loc_args;
        return $this;
    }

}