<?php

namespace Mindy\Template;

use Exception;

class SyntaxError extends Exception
{
    protected $token;
    protected $path;

    public function __construct($message, $token)
    {
        $this->token = $token;
        $line = $token->getLine();
        $char = $token->getChar();
        parent::__construct("$message in line $line char $char");
    }

    public function setTemplateFile($path)
    {
        $this->path = $path;
        return $this;
    }

    public function getTemplateFile()
    {
        return $this->path;
    }

    public function __toString()
    {
        return (string)$this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }
}

