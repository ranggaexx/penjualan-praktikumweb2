<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Customer_model extends CI_Model
{
    protected $_table = 'customer';
    protected $primary = 'id';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function Save() {
        $data = array(
            'NIK_cust' => htmlspecialchars($this->input->post('NIK_cust'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'jk_cust' => htmlspecialchars($this->input->post('jk_cust'), true),
            'alamat_cust' => htmlspecialchars($this->input->post('alamat_cust'), true),
            'telp_cust' => htmlspecialchars($this->input->post('telp_cust'), true),
            'email_cust' => htmlspecialchars($this->input->post('email_cust'), true),
            'id' => $this->session->userdata('id')
        );

        return $this->db->insert($this->_table,$data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function editData()
    {
        $id = $this->input->post('id');
        $data = array(
            'NIK_cust' => htmlspecialchars($this->input->post('NIK_cust'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'jk_cust' => htmlspecialchars($this->input->post('jk_cust'), true),
            'alamat_cust' => htmlspecialchars($this->input->post('alamat_cust'), true),
            'telp_cust' => htmlspecialchars($this->input->post('telp_cust'), true),
            'email_cust' => htmlspecialchars($this->input->post('email_cust'), true),
            'id' => $this->session->userdata('id')
        );
    return $this->db->set($data)->where($this->primary,$id)->update($this->_table);
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
        if($this->db->affected_rows()>0) {
            $this->session->set_flashdata("success", "Data Customer Berhasil Dihapus!");
        }
    }
}