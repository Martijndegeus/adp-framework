<?php

namespace Application\System\Frontend;

class ViewBuilder
{
    const VIEWS_DIRECTORY = __DIR__ . '/../../Resources/Views';
    
    private static $application;
    
    public static function start(FrontendLoader $application)
    {
        self::$application = $application;
        self::loadHeader($application);
        self::loadBody($application);
        self::loadFooter($application);
    }
    
    public static function include(string $viewName, array $data = [])
    {
        $viewName = str_replace('.', DIRECTORY_SEPARATOR, $viewName);
        self::getView(self::$application,$viewName, $data);
    }
    
    private static function getView(FrontendLoader $application, string $viewPath = '', array $data = [])
    {
        include_once self::VIEWS_DIRECTORY . DIRECTORY_SEPARATOR . strtolower($viewPath) . '.view.php';
    }
    
    private static function loadHeader(FrontendLoader $application)
    {
        self::getView(self::$application, 'layout/header');
    }
    
    private static function loadBody(FrontendLoader $application)
    {
        self::getView(self::$application, 'layout/body');
    }
    
    private static function loadFooter(FrontendLoader $application)
    {
        self::getView(self::$application, 'layout/footer');
    }
}