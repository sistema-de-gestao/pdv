<?php 

namespace app\Models;

use database\connection\Connection;

class Companies
{
    private $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnection();
    }

    public function Select($id)
    {
        $sql = "SELECT * FROM companies WHERE id = '$id'";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }
}
