<?php

namespace Application\System\Exceptions;

use Exception;
use Throwable;

class MissingDotEnvException extends Exception
{
    
    protected $message = 'Cannot load Core';
    
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct('Error on line '.$this->getLine().' in '.$this->getFile() .': <b>'.$this->getMessage().'</b> (' . $message . ')', $code, $previous);
    }
}