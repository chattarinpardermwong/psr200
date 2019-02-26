<?php

namespace Controller;
use \Core\Connection;
class HomeController
{
    public function getAllData(){
        $connection = Connection::make();
        return $connection;
    }
}