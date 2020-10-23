<?php

namespace Application\System\Backend\Database;

use Application\System\Backend\MongoConnector;

class DB
{
    public static function insert()
    {
        $database = new MongoConnector();
    }
}