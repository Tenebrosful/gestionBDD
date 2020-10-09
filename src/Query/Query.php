<?php

namespace app\Query;

class Query
{
    private $sqltable;
    private $fields = '*';
    private $where = null;
    private $args = [];
    private $sql = '';

    public static function table(string $nomTable){
        $query = new Query();
        $query->sqltable = $nomTable;
        return $query;
    }
}