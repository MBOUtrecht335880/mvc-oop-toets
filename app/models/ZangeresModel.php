<?php

class ZangeresModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getZangeressen()
    {
        $sql = 'SELECT  * FROM Zangeres';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
