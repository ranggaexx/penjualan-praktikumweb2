<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    // public function customerlap()
    // {
    //     $pdf = new FPDF('p', 'mm', 'A4');
    //     $pdf->Addpage();
    //     $pdf->SetFont('Times', 'B', 18);
    //     $pdf->SetFont('Times', 'B', 14);
    //     $pdf->Cell(0, 5, 'LAPORAN DATA CUSTOMER', 0, 1, 'C');
    //     $pdf->Cell(30, 8, '', 0, 1);
    //     $pdf->SetFont('Times', 'B', 9);
    //     $pdf->Cell(7, 6, 'NO', 1, 0, 'C');
    //     $pdf->Cell(37, 6, 'NIK', 1, 0, 'C');
    //     $pdf->Cell(37, 6, 'NAMA CUSTOMER', 1, 0, 'C');
    //     $pdf->Cell(30, 6, 'TELP', 1, 0, 'C');
    //     $pdf->Cell(45, 6, 'ALAMAT', 1, 1, 'C');
    //     $i = 1;
    //     $data = $this->db->get('customer')->result_array();
    //     foreach ($data as $d) {
    //         $pdf->SetFont('Times', '', 9);
    //         $pdf->Cell(7, 6, $i++, 1, 0);
    //         $pdf->Cell(37, 6, $d['NIK_cust'], 1, 0);
    //         $pdf->Cell(37, 6, $d['name'], 1, 0);
    //         $pdf->Cell(30, 6, $d['telp_cust'], 1, 0);
    //         $pdf->Cell(45, 6, $d['alamat_cust'], 1, 1);
    //     }
    //     $pdf->SetFont('Times', '', 10);
    //     $pdf->Output('laporan_customer.pdf', 'I');
    // }

    // public function headerlap()
    // {
    //     $this->load->view('Customer/report_header_only');
    // }

    // public function customerfull()
    // {
    //     $this->load->view('Customer/report_full');
    // }

    public function customercustom()
    {
        $this->load->view('Customer/report_customer');
    }

    public function barangcustom()
    {
        $this->load->view('Barang/report_barang');
    }

    public function katagoricustom()
    {
        $this->load->view('Katagori/report_katagori');
    }

        public function satuancustom()
    {
        $this->load->view('Satuan/report_satuan');
    }
}