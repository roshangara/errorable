<?php

namespace Roshangara\Errorable;

class Error
{
    /**
     * Code
     * @var int
     */
    public $code;

    /**
     * Message
     * @var string
     */
    public $message;

    /**
     * Sender
     * @var null|object
     */
    public $sender;

    /**
     * Error constructor.
     *
     * @param $code
     * @param $message
     * @param null $sender
     */
    public function __construct($code, $message, $sender = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->sender = $sender;
    }
}