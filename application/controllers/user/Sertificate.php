<?php

class Sertificate extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_sertificate($id)
    {
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Laporan-Dompdf-Codeigniter.pdf";
        $this->pdf->load_view('v_pdf_sample', ['pegawai' => []]);
    }

    public function get_sertificate_html($id)
    {
        $this->load->view('v_pdf_sample');
    }
}