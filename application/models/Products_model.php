<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProducts()
    {
        $this->db->select('*');
        $this->db->from('table1');
        $this->db->join('table1', 'table1.id = table2.id');
        $this->db->join('table1', 'table1.id = table3.id');
        $query = $this->db->get();
    }
}
