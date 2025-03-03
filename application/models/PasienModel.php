<?php

class PasienModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $_tabel = 'pasien';

    function count()
    {
        return $this->db->count_all($this->_tabel);
    }

    function getAll()
    {
        return $this->db->get($this->_tabel)->result();
    }

    function getById($id)
    {
        return $this->db->get_where($this->_tabel, ["id_pasien" => $id])->result();
    }

    function insert($data)
    {
        $this->db->insert($this->_tabel, $data);
    }

    function update($id, $data)
    {
        $this->db->update($this->_tabel, $data, ['id_pasien' => $id]);
    }

    function delete($id)
    {
        $this->db->delete($this->_tabel, ['id_pasien' => $id]);
    }
}
