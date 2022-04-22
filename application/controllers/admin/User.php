<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller 
{
    private $mainPage = 'admin/index';
    public function __construct()
    {
        parent::__construct();
        $this->parseData['navbar'] = 'parts/admin/header';
        $this->parseData['sidebar'] = 'parts/admin/sidebar';
    }

    public function index()
    {
        $this->parseData['content'] = 'admin/user/index';
        $this->js[] = base_url('assets/js/pages/user.js');
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['title_tab'] = "Partisipasi Pengguna";
 
        $this->load->view($this->mainPage, $this->parseData);
    }

    public function postCreate() 
    {
        $body = [
            "session_id"        => $this->input->post('session_id'),
            "full_name"         => $this->input->post('full_name'),
            "place_of_birth"    => $this->input->post('place_of_birth'),
            "date_of_birth"     => $this->input->post('date_of_birth'),
            "email"             => $this->input->post('email'),
            "phone_number"      => $this->input->post('phone_number'),
            "address"           => $this->input->post('address'),
        ];

        $req = $this->http_request_post("user-participant/create", $body);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message ,"data" => $req->data]);
    }

    public function listUserSession()
    {
        $this->parseData['content'] = 'admin/user/index';
        $this->js[] = base_url('assets/js/pages/user-session-list.js');
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['title_tab'] = "Peserta Ujian";

        $this->load->view($this->mainPage, $this->parseData);
    }
}