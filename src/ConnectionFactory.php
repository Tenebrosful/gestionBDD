<?php

class ConnectionFactory {

    private static $connection;

    public static function makeConnection(array $conf) {
        $host = $conf['host'];
        $dbname = $conf['dbname'];
        $user = $conf['user'];
        $pass = $conf['pass'];

        $connection = new PDO(`mysql:host=$host;dbname=$dbname`, $user, $pass, array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES=> false,
            PDO::ATTR_STRINGIFY_FETCHES => false
        ));

        return $connection;
    }

    public static function getConnection() {
        return $connection;
    }
}