<?php


namespace Application\System;

use Application\System\Backend\Database\DB;
use Application\System\Frontend\FrontendLoader;
use Application\System\Frontend\ViewBuilder;
use Dotenv\Dotenv;

class Core
{
    public static function run()
    {
        $dotEnv = Dotenv::createImmutable(__DIR__ . '/../..');
        $dotEnv->load();
        $app = new FrontendLoader();
        ViewBuilder::start($app);
        
        DB::insert();
    }
}