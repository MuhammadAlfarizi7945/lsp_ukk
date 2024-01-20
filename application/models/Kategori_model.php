<?php
class Kategori_model extends CI_Model
{
    public function getAllKategori()
    {
        return $this->db->get('tbl_kategori')->result_array();
    }

    public function addKat()
    {
        $data = [
            'nama_kat' => $this->input->post('nama_kat', true),
        ];
        $this->db->insert('tbl_kategori', $data);
    }

    public function getKatById($id)
    {
        return $this->db->get_where('tbl_kategori', ['id_kat' => $id])->row_array();
    }

    public function UpdateKat($id)
    {
        $data = [
            'nama_kat' => $this->input->post('nama_kat', true),
        ];
        $this->db->where('id_kat', $id);
        $this->db->update('tbl_kategori', $data);
    }

    public function DeleteKat($id)
    {
        $this->db->where('id_kat', $id);
        $this->db->delete('tbl_kategori');
    }
}
