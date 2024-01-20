<?php
class Laporan_model extends CI_Model
{
    public function getAllLaporan()
    {
        $this->db->select('tbl_obat.kode_obat AS kode_obat, tbl_obat.nama_obat AS nama_obat, tbl_obat.masa_exfire AS masa_exfire, tbl_obat.harga AS harga, tbl_obat.jumlah AS jumlah, tbl_distributor.id_dist AS id_dist, tbl_distributor.nama_dist AS dist, tbl_distributor.alamat AS alamat, tbl_distributor.no_telp AS no_telp, tbl_kategori.id_kat AS id_kat, tbl_kategori.nama_kat AS nama_kat');
        $this->db->from('tbl_obat');
        $this->db->join('tbl_kategori', 'tbl_obat.id_kat = tbl_kategori.id_kat', 'left');
        $this->db->join('tbl_distributor', 'tbl_obat.id_dist = tbl_distributor.id_dist', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }
}
