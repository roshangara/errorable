<?php

namespace Roshangara\Errorable;

trait Errorable
{
    /**
     * Errors
     * @var array
     */
    protected $errors = [];

    /**
     * Get all errors
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Has Error
     *
     * @return bool
     */
    public function hasError(): bool
    {
        return (bool)count($this->errors);
    }

    /**
     * Get latest error
     * @return Error
     */
    public function getLatestError(): Error
    {
        return end($this->errors) ?: new Error(0, '');
    }

    /**
     * Set error
     *
     * @param $code
     * @param $message
     * @param null $sender
     */
    protected function setError($code, $message, $sender = null)
    {
        $this->errors[] = new Error($code, $message, $sender ?: debug_backtrace()[1]);
    }
}