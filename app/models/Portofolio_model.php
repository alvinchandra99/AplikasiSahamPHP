<?php

class Portofolio_model extends Database
{
    private $table = 'myportofolio';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPortofolio()
    {

        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }
    public function insertPortofolio($data)

    {
        $query = "INSERT INTO myportofolio (stockCode, avgBuy, buyAt, lot, stockBroker) VALUES (:stockCode, :avgBuy, :buyAt, :lot, :stockBroker)";
        $this->db->query($query);
        $this->db->bind('stockCode', $data['stockCode']);
        $this->db->bind('avgBuy', $data['avgBuy']);
        $this->db->bind('buyAt', $data['buyAt']);
        $this->db->bind('lot', $data['lot']);
        $this->db->bind('stockBroker', $data['stockBroker']);

        $this->db->execute();
    }
    public function deletePortofolio($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=' . $id);
        $this->db->execute();
    }
}
