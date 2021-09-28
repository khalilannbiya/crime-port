<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
    public function hapusUser($where = null)
    {
        $this->db->delete('user', $where);
    }
    public function userBaru()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(5);
        return $this->db->get_where('user', ['role_id' => 2]);
    }
    public function dataUser()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get_where('user', ['role_id' => 2]);
    }
}
