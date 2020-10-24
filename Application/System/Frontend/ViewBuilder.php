<?php

namespace Application\System\Frontend;

class ViewBuilder
{
    const VIEWS_DIRECTORY = __DIR__ . '/../../Resources/Views';
    
    private static $application;
    
    /**
     * @param FrontendLoader $application
     */
    public static function start(FrontendLoader $application)
    {
        self::$application = $application;
        self::loadHeader($application);
        self::loadBody($application);
        self::loadFooter($application);
    }
    
    /**
     * @param string $viewName
     * @param array $data
     */
    public static function include(string $viewName, array $data = [])
    {
        $viewName = str_replace('.', DIRECTORY_SEPARATOR, $viewName);
        self::getView(self::$application,$viewName, $data);
    }
    
    /**
     * @param FrontendLoader $application
     * @param string $viewPath
     * @param array $data
     */
    private static function getView(FrontendLoader $application, string $viewPath = '', array $data = [])
    {
        include_once self::VIEWS_DIRECTORY . DIRECTORY_SEPARATOR . strtolower($viewPath) . '.view.php';
    }
    
    /**
     * @param FrontendLoader $application
     */
    private static function loadHeader(FrontendLoader $application)
    {
        self::getView(self::$application, 'layout/header');
    }
    
    /**
     * @param FrontendLoader $application
     */
    private static function loadBody(FrontendLoader $application)
    {
        self::getView(self::$application, 'layout/body');
    }
    
    /**
     * @param FrontendLoader $application
     */
    private static function loadFooter(FrontendLoader $application)
    {
        self::getView(self::$application, 'layout/footer');
    }
}