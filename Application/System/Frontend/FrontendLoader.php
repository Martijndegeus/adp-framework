<?php


namespace Application\System\Frontend;


use Application\System\Exceptions\ApplicationNotStartedException;

class FrontendLoader
{
    
    /**
     * @var array|false|string
     */
    protected $applicationName;
    protected $styleUrl;
    protected $fontUrl;
    protected $fontName;
    protected $jsUrl;
    
    public function __construct()
    {
        $this->applicationName = $_ENV['TITLE'];
        $this->styleUrl = $_ENV['STYLE_CDN'];
        $this->fontUrl = $_ENV['FONT_URL'];
        $this->fontName = $_ENV['FONT_NAME'];
        $this->jsUrl = $_ENV['JS_CDN'];
        
        // Debug mode
        if ((bool)$_ENV['DEBUG']) {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        } else {
            ini_set('display_errors', 0);
            ini_set('display_startup_errors', 0);
            error_reporting(0);
        }
        
        return $this;
    }
    
    public function getApplicationName(): ?string
    {
        try {
            if (empty($this->applicationName)) {
                throw new ApplicationNotStartedException('Application Name hasn\'t been set.');
            }
        } catch (ApplicationNotStartedException $e) {
            echo $e->getMessage();
        }
        
        return $this->applicationName;
    }
    
    /**
     * @return mixed
     */
    public function getStyleUrl(): ?string
    {
        try {
            if (empty($this->styleUrl)) {
                throw new ApplicationNotStartedException('Application Style Url hasn\'t been set.');
            }
        } catch (ApplicationNotStartedException $e) {
            echo $e->getMessage();
        }
        
        return $this->styleUrl;
    }
    
    /**
     * @return mixed
     */
    public function getFontUrl()
    {
        try {
            if (empty($this->fontUrl)) {
                throw new ApplicationNotStartedException('Application Font Url hasn\'t been set.');
            }
        } catch (ApplicationNotStartedException $e) {
            echo $e->getMessage();
        }
    
        return $this->fontUrl;
    }
    
    /**
     * @return mixed
     */
    public function getFontName()
    {
        try {
            if (empty($this->fontName)) {
                throw new ApplicationNotStartedException('Application Font Name hasn\'t been set.');
            }
        } catch (ApplicationNotStartedException $e) {
            echo $e->getMessage();
        }
    
        return $this->fontName;
    }
    
    /**
     * @return mixed
     */
    public function getJsUrl(): ?string
    {
        try {
            if (empty($this->jsUrl)) {
                throw new ApplicationNotStartedException('Application Javascript Url hasn\'t been set.');
            }
        } catch (ApplicationNotStartedException $e) {
            echo $e->getMessage();
        }
        
        return $this->jsUrl;
    }
    
    
}