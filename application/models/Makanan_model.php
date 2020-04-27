<?php

class Makanan_model extends CI_Model
{
    public function getAllMakanan()
    {
        return $this->db->get('makanan')->result_array();
    }

    public function tambahDataMakanan()
    {
        $data = [
            "namamakanan" => $this->input->post('namamakanan', true),
            "harga" => $this->input->post('harga', true),
            "komposisi" => $this->input->post('komposisi', true)
        ];

        $this->db->insert('makanan', $data);
    }

    public function hapusDataMakanan($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('makanan', ['id' => $id]);
    }

    public function getMakananById($id)
    {
        return $this->db->get_where('makanan', ['id' => $id])->row_array();
    }

    public function ubahDataMakanan()
    {
        $data = [
            "namamakanan" => $this->input->post('namamakanan', true),
            "harga" => $this->input->post('harga', true),
            "komposisi" => $this->input->post('komposisi', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('makanan', $data);
    }

    public function cariDataMakanan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('namamakanan', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('komposisi', $keyword);
        return $this->db->get('makanan')->result_array();
    }
}
