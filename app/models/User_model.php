<?php

class User_model extends Database
{
    private $table = 'users';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {


        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }
}
