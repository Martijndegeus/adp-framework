<?php

namespace Application\System\Backend;

use MongoDB\Exception\Exception;
use MongoDB;

class MongoConnector
{
    public function __construct()
    {
        try {
            $collection = (new MongoDB\Client('mongodb://mongo'))->test->users;
    
            $insertOneResult = $collection->insertOne([
                'username' => 'admin',
                'email' => 'admin@example.com',
                'name' => 'Admin User',
            ]);
    
            printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
    
            var_dump($insertOneResult->getInsertedId());
        } catch (Exception $e) {
            echo '<p>Couldn\'t connect to mongodb, is the "mongo" process running?</p>';
            exit();
        }
    }
}