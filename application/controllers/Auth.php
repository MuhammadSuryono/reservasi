<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
    private $mainPage = 'auth/wrapper';
    public function __construct()
    {
        parent::__construct();
        if ($this->isLogin()) redirect("/admin");
        array_push($this->js, base_url() . 'assets/js/pages/login.js');
    }

    public function login()
    {
        $this->parseData['content'] = 'auth/login';
        // Sample parse js or css to data
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;

        $this->load->view($this->mainPage, $this->parseData);
    }

    public function postLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $body = [
            'username' => $username,
            'password' => $password,
        ];

        $req = $this->http_request_post("auth/login", $body);
        $statusLogin = false;
        
        if ($req->response->code == 200) {
            $statusLogin = true;
            $userData = [
                'userIsLogin' => true,
                'userData' => $req->data,
            ];
            $this->session->set_userdata($userData);
        }

        echo json_encode(["status" => $statusLogin, "message" => $req->response->message ,"data" => $body, 'response' => $req->data]);
    }

    public function authLogout()
    {
        $this->session->sess_destroy();
        var_dump($this->session->sess_destroy());
        exit();
        redirect(base_url('/login'));
    }
}
