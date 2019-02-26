<?php

namespace Core;
use \PDO;
use \PDOException;
use \Exception;

class Connection
{
    public static function make()
    {
        try{
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=world',
                        'world200',
                        '1234');
        } catch (PDOException $e){
            throw new Exception("cant connect DB");
        }

        return $pdo;
    }
}