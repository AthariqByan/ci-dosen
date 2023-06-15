<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDosen extends CI_Model
{
    public function getDosen()
    {
        return $this->db->get('dosen');
    }

    function simpanDataDosen($data = null)
    {
        $this->db->insert('dosen', $data);
    }

    public function dosenWhere($where)
    {
        return $this->db->get_where('dosen', $where);
    }

    public function editDataDosen($where, $data)
    {
        $this->db->update('dosen', $data, $where);
    }

    public function hapus($where = null)
    {
        $this->db->delete('dosen', $where);
    }
}
