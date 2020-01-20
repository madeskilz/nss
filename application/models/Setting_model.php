<?php
class Setting_model extends CI_Model
{
    function get($name)
    {
        $this->db->where('name', $name);
        return $this->db->get('settings', 1)->row()->value;
    }
}