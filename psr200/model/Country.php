<?php

namespace Model;

use \Core\QueryBuilder;

class Country {
    public function findAll() {
        $builder = new QueryBuilder();
        return $builder->selectAll('country');
    }
}