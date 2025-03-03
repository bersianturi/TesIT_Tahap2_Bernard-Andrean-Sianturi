<?php

class RawatJalanModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $_tabel = 'pendaftaran';

    function count()
    {
        return $this->db->count_all($this->_tabel);
    }

    function getNomorAntrian()
    {
        $this->db->select('COALESCE(MAX(nomor_antrian), 0) + 1 AS next_nomor_antrian');
        $this->db->from($this->_tabel);
        $this->db->where('DATE(tgl_daftar)', 'CURDATE()', false);
        $query = $this->db->get();
        return $query->row()->next_nomor_antrian;
    }

    function getAll()
    {
        $query = $this->db->select('*')->from($this->_tabel)->join('pasien', 'pendaftaran.id_pasien = pasien.id_pasien', 'inner ');
        return $query->get()->result();
    }

    function getAllToday()
    {
        $query = $this->db->select('*')->from($this->_tabel)->where('DATE(tgl_daftar)', 'CURDATE()', false)->join('pasien', 'pendaftaran.id_pasien = pasien.id_pasien', 'inner ');
        return $query->get()->result();
    }

    function getById($id)
    {
        return $this->db->get_where($this->_tabel, ["id_pendaftaran" => $id])->result();
    }

    function insert($data)
    {
        $this->db->insert($this->_tabel, $data);
    }

    function update($id, $data)
    {
        $this->db->update($this->_tabel, $data, ['id_pendaftaran' => $id]);
    }

    function delete($id)
    {
        $this->db->delete($this->_tabel, ['id_pendaftaran' => $id]);
    }
}
