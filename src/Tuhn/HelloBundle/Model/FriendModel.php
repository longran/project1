<?php

namespace Tuhn\HelloBundle\Model;
use Doctrine\DBAL\Connection;

class FriendModel
{
    private $db;

    public function __construct(Connection $conn)
    {
        $this->db = $conn;
    }

    public function findAll()
    {
        $sql = "SELECT *
                FROM friend
                ORDER BY name";

        $result = $this->db->fetchAll($sql);

        $names = array();
        foreach ($result as $row) {
            $names[] = $row['name'];
        }

        return $names;
    }
}