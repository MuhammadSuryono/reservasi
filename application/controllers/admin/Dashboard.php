<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller 
{
    private $mainPage = 'admin/index';
    public function __construct()
    {
        parent::__construct();
        $this->parseData['isLogin'] = $this->isLogin();
        $this->parseData['navbar'] = 'parts/admin/header';
        $this->parseData['sidebar'] = 'parts/admin/sidebar';

        // Sample push other script js
        // array_push($this->js, base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js');
        // array_push($this->js, base_url() . 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');
    }

    public function index()
    {
        $this->parseData['content'] = 'admin/dashboard';
        // Sample parse js or css to data
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        redirect(base_url('admin/packet'));
        
        $this->load->view($this->mainPage, $this->parseData);
    }
}