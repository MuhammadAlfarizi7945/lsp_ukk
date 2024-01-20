<?php
class Obat_model extends CI_Model
{
    public function getAllObat()
    {
        $this->db->select('tbl_obat.kode_obat AS kode_obat, tbl_obat.nama_obat AS nama_obat, tbl_obat.masa_exfire AS masa_exfire, tbl_obat.harga AS harga, tbl_obat.jumlah AS jumlah, tbl_distributor.id_dist AS id_dist, tbl_distributor.nama_dist AS dist, tbl_distributor.alamat AS alamat, tbl_distributor.no_telp AS no_telp, tbl_kategori.id_kat AS id_kat, tbl_kategori.nama_kat AS nama_kat');
        $this->db->from('tbl_obat');
        $this->db->join('tbl_kategori', 'tbl_obat.id_kat = tbl_kategori.id_kat', 'left');
        $this->db->join('tbl_distributor', 'tbl_obat.id_dist = tbl_distributor.id_dist', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    // fungsi untuk menampilkan data distributor
    public function getAllDist()
    {
        return $this->db->get('tbl_distributor')->result_array();
    }
    // fungsi untuk menampilkan data kategori
    public function getAllKat()
    {
        return $this->db->get('tbl_kategori')->result_array();
    }

    public function addObat()
    {
        $data = [
            'kode_obat' => $this->input->post('kode_obat', true),
            'id_dist' => $this->input->post('id_dist', true),
            'id_kat' => $this->input->post('id_kat', true),
            'nama_obat' => $this->input->post('kode_obat', true),
            'masa_exfire' => $this->input->post('masa_exfire', true),
            'harga' => $this->input->post('harga', true),
            'jumlah' => $this->input->post('jumlah', true),
        ];
        $this->db->insert('tbl_obat', $data);
    }

    public function getObatById($id)
    {
        return $this->db->get_where('tbl_obat', ['kode_obat' => $id])->row_array();
    }

    public function UpdateObat($id)
    {
        $data = [
            'kode_obat' => $this->input->post('kode_obat', true),
            'id_dist' => $this->input->post('id_dist', true),
            'id_kat' => $this->input->post('id_kat', true),
            'nama_obat' => $this->input->post('kode_obat', true),
            'masa_exfire' => $this->input->post('masa_exfire', true),
            'harga' => $this->input->post('harga', true),
            'jumlah' => $this->input->post('jumlah', true),
        ];
        $this->db->where('kode_obat', $id);
        $this->db->update('tbl_obat', $data);
    }

    public function DeleteObat($id)
    {
        $this->db->where('kode_obat', $id);
        $this->db->delete('tbl_obat');
    }
}
