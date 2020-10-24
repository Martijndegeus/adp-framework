<?php


namespace Application\System;

use Application\System\Backend\Database\DB;
use Application\System\Exceptions\MissingDotEnvException;
use Application\System\Frontend\FrontendLoader;
use Application\System\Frontend\ViewBuilder;
use Dotenv\Dotenv;

class Core
{
    public static function run()
    {
        try {
            if (!file_exists(__DIR__ . '/../../.env')) {
                throw new MissingDotEnvException('No .env file found.');
            }
        } catch (MissingDotEnvException $e) {
            echo $e->getMessage();
        }
        
        $dotEnv = Dotenv::createImmutable(__DIR__ . '/../..');
        $dotEnv->load();
        $app = new FrontendLoader();
        ViewBuilder::start($app);
        
//        DB::insert();
    }
}