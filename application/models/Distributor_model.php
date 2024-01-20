<?php
class Distributor_model extends CI_Model
{
    public function getAllDistributor()
    {
        return $this->db->get('tbl_distributor')->result_array();
    }

    public function addDistributor()
    {
        $data = [
            'nama_dist' => $this->input->post('nama_dist', true),
            'alamat' => $this->input->post('alamat', true),
            'no_telp' => $this->input->post('no_telp', true),
        ];
        $this->db->insert('tbl_distributor', $data);
    }

    public function getUserById($id)
    {
        return $this->db->get_where('tbl_distributor', ['id_dist' => $id])->row_array();
    }

    public function UpdateDist($id)
    {
        $data = [
            'nama_dist' => $this->input->post('nama_dist', true),
            'alamat' => $this->input->post('alamat', true),
            'no_telp' => $this->input->post('no_telp', true),
        ];
        $this->db->where('id_dist', $id);
        $this->db->update('tbl_distributor', $data);
    }

    public function DeleteDist($id)
    {
        $this->db->where('id_dist', $id);
        $this->db->delete('tbl_distributor');
    }
}
