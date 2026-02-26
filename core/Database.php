<?php

class Database {
    public static function connect() {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($db->connect_error) {
            die('DB Connection failed');
        }
        $db->set_charset('utf8mb4');
        return $db;
    }
}
