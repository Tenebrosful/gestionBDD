<?php

namespace app\Query;

class Query
{
    private $sqltable;
    private $fields = '*';
    private $where = null;
    private $args = [];
    private $sql = '';

}