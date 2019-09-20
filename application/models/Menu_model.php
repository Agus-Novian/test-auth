<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `hn_user_sub_menu`.*, `hn_user_menu`.`menu` 
                    FROM `hn_user_sub_menu` JOIN `hn_user_menu`
                      ON `hn_user_sub_menu`.`menu_id` = `hn_user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
}
