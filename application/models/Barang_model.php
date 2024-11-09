<?php defined('BASEPATH') or exit('No direct script access allowed');
class Barang_model extends CI_Model
{
    protected $_table = 'Barang';
    protected $primary = 'id';

    public function getAll()
    {
        $sql = "SELECT a.id, a.barcode, a.name, b.name AS satuan, c.name AS katagori, a.harga_beli, a.harga_jual, a.stok_barang FROM ((barang a LEFT JOIN satuan b ON a.
        id_satuan = b.id) LEFT JOIN katagori c ON a.id_katagori = c.id)";
        return $this->db->query($sql)->result();
    }

    public function save()
    {
        $data = array(
            'barcode' => htmlspecialchars($this->input->post('barcode'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'harga_beli' => htmlspecialchars($this->input->post('harga_beli'), true),
            'harga_jual' => htmlspecialchars($this->input->post('harga_jual'), true),
            'stok_barang' => htmlspecialchars($this->input->post('stok_barang'), true),
            'id_katagori' => htmlspecialchars($this->input->post('Katagori'), true),
            'id_satuan' => htmlspecialchars($this->input->post('Satuan'), true),
            'id_supplier' => htmlspecialchars($this->input->post('Supplier'), true),
            'id_user' => $this->session->userdata('id')
        );
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    
    public function editData()
    {
        $id = $this->input->post('id');
        $data = array(
            'barcode' => htmlspecialchars($this->input->post('barcode'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'harga_beli' => htmlspecialchars($this->input->post('harga_beli'), true),
            'harga_jual' => htmlspecialchars($this->input->post('harga_jual'), true),
            'stok_barang' => htmlspecialchars($this->input->post('stok_barang'), true),
            'id_katagori' => htmlspecialchars($this->input->post('Katagori'), true),
            'id_satuan' => htmlspecialchars($this->input->post('satuan'), true),
            'id_supplier' => htmlspecialchars($this->input->post('Supplier'), true),
            'id_user' => $this->session->userdata('id')
        );
        return $this->db->set($data)->where($this->primary,$id)->update($this->_table);
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if($this->db->affected_rows()>0) {
            $this->session->set_flashdata("success", "Data Barang Berhasil Dihapus!");
        }
    }
}