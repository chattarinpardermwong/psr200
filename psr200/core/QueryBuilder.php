<?php
namespace Core;
use \Core\Connection;
class QueryBuilder
{
    private $pdo; //property

    public function __construct(){ //constructor
        $this->pdo = Connection::make(); //same core dont need USE

    }

    public function selectAll($table){
        $query = $this->pdo->prepare('select * from' .$table);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_OBJ);
    }
}