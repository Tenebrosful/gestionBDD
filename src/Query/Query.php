<?php

namespace app\Query;

class Query
{
    private $sqltable;
    private $fields = '*';
    private $where = [];
    private $args = [];
    private $sql = '';

    /**
     * @param string $nomTable
     * @return Query
     */
    public static function table(string $nomTable){
        $query = new Query();
        $query->sqltable = $nomTable;
        return $query;
    }

    /**
     * @param string $colonne
     * @param string $comparateur
     * @param mixed $valeur
     * @return Query
     */
    public function where(string $colonne, string $comparateur, $valeur){
        $this->where[]['col'] = $colonne;
        $this->where[]['op'] = $comparateur;
        $this->where[]['val'] = $valeur;
        $this->args[] = $valeur;
        return $this;
    }
}