<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLaporan extends CI_Model
{
    public function hapusLaporan($where = null)
    {
        $this->db->delete('laporan', $where);
    }
    public function laporanBaru()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(5);
        return $this->db->get('laporan');
    }
    public function dataLaporan()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('laporan');
    }
}
