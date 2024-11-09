<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
        $this->load->library('session'); 
    }
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'userlog' => infoLogin(),
            'Barang' => $this->Barang_model->getAll(),
            'content' => 'Barang/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Barang',
            'Katagori'  => $this->db->get('Katagori')->result_array(),
            'satuan'    => $this->db->get('Satuan')->result_array(),
            'Supplier'  => $this->db->get('Supplier')->result_array(),
            'content' => 'Barang/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        $this->Barang_model->Save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Barang Berhasil Disimpan");
        }
        redirect('Barang');
    }

    public function getedit($id)
    {
        $data = array(
            'title' => 'Tambah Data Barang',
            'Katagori'  => $this->db->get('Katagori')->result_array(),
            'satuan'    => $this->db->get('Satuan')->result_array(),
            'supplier'  => $this->db->get('Supplier')->result_array(),
            'Barang' => $this->Barang_model->getById($id),
            'content' => 'Barang/edit_form'
        );
        $this->load->view('template/main', $data);
    }

        public function edit()
    {
        $this->Barang_model->editData();
        if($this->db->affected_rows()>0) {
            $this->session->set_flashdata("success", "Data barang berhasil diubah!");
        }
        redirect('Barang');
    }

    function delete($id)
    {
        $this->Barang_model->delete($id);
        redirect('Barang');
    }

    public function laporan()
    {
        $data = array(
            'title' => 'Tambah Laporan Data Barang',
            'content' => 'Barang/laporan'
        );
        $this->load->view('template/main', $data);
    }
}