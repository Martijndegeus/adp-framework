<?php

namespace Application\System\Frontend;

class RequestHandler
{
    private $view;
    private $algorithm;
    private $page;
    
    /**
     * RequestHandler constructor.
     */
    public function __construct()
    {
        $parameters = $_GET;
        
        $this->view = $parameters['view'];
        $this->algorithm = $parameters['algorithm'];
        $this->page = $parameters['page'];
    }
    
    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }
    
    /**
     * @return mixed
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }
    
    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }
    
    
}