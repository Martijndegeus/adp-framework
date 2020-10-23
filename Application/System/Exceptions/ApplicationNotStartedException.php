<?php

namespace Application\System\Exceptions;

use Exception;
use Throwable;

class ApplicationNotStartedException extends Exception
{
    protected $message = 'The Application has not been started yet';
    
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct('Error on line '.$this->getLine().' in '.$this->getFile() .': <b>'.$this->getMessage().'</b> (' . $message . ')', $code, $previous);
    }
}