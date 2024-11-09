<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Katagori extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Katagori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'View Data Katagori',
            'userlog' => infoLogin(),
            'katagori' => $this->Katagori_model->getAll(),
            'content' => 'Katagori/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Katagori',
            'content' => 'Katagori/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function Save()
    {
        $this->Katagori_model->Save();
        if($this->db->affected_rows()>0) {
            $this->session->set_flashdata("success", "data katagori berhasil disimpan");
        }
        redirect('Katagori');
    }

    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data Katagori',
            'Katagori' => $this->Katagori_model->getById($id),
            'content' => 'Katagori/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function edit()
    {
        $this->Katagori_model->editData();
        if($this->db->affected_rows()>0) {
            $this->session->set_flashdata("success", "Data katagori berhasil diubah!");
        }
        redirect('Katagori');
    }

    function delete($id)
    {
        $this->Katagori_model->delete($id);
        redirect('Katagori');
    }

    public function laporan()
    {
        $data = array(
            'title' => 'Tambah Laporan Data Kategori',
            'content' => 'Katagori/laporan'
        );
        $this->load->view('template/main', $data);
    }

}