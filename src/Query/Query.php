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
    public function where(string $colonne, string $comparateur, $valeur)
    {
        $this->where[]['col'] = $colonne;
        $this->where[]['op'] = $comparateur;
        $this->where[]['val'] = $valeur;
        $this->args[] = $valeur;
        return $this;
    }

    /**
     * @TODO Finir
     */
    public function get()
    {
        $sql = `select $this->fields from $this->sqltable`;

        if (!empty($this->where)) {
            $sql .= "where";
            foreach ($this->where as $key => $condition) {
                if ($key !== 0)
                    $sql .= " AND";
                $sql .= implode(' ', $condition);
            }
        }

        $stmt = $pdo->prepare($this->sql);
    }
}