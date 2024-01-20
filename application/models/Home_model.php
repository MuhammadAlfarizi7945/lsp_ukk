<?php
class Home_model extends CI_Model
{
    public function jumlahDist()
    {
        $query = $this->db->get('tbl_distributor');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahKat()
    {
        $query = $this->db->get('tbl_kategori');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahObat()
    {
        $query = $this->db->get('tbl_obat');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
