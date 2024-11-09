<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'View Data Customer',
            'userlog' => infoLogin(),
            'Customer' => $this->Customer_model->getAll(),
            'content' => 'Customer/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Customer',
            'content' => 'Customer/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function Save()
    {
        $this->Customer_model->Save();
        if($this->db->affected_rows()>0) {
            $this->session->set_flashdata("success", "data Customer berhasil disimpan");
        }
        redirect('Customer');
    }

    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data Customer',
            'Customer' => $this->Customer_model->getById($id),
            'content' => 'Customer/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function edit()
    {
        $this->Customer_model->editData();
        if($this->db->affected_rows()>0) {
            $this->session->set_flashdata("success", "Data Customer berhasil diubah!");
        }
        redirect('Customer');
    }

    function delete($id)
    {
        $this->Customer_model->delete($id);
        redirect('Customer');
    }

    public function laporan()
    {
        $data = array(
            'title' => 'Tambah laporan data customer',
            'content' => 'Customer/laporan'
        );
        $this->load->view('template/main', $data);
    }

}