<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserSession extends MY_Controller
{
    private $mainPage = 'admin/index';
    public function __construct()
    {
        parent::__construct();
        $this->parseData['navbar'] = 'parts/admin/header';
        $this->parseData['sidebar'] = 'parts/admin/sidebar';

        // Sample push other script js
        // array_push($this->js, base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js');
        // array_push($this->js, base_url() . 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');
    }

    public function index()
    {
        $this->js[] = base_url("assets/js/pages/user-session.js");
        $this->parseData['content'] = 'admin/session/index';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['title_tab'] = "User Session";

        $req    = $this->http_request_get("session-access/list");
        $data   = $req->data;

        $this->parseData['pagination'] = $this->pagination($data);
        $this->parseData['data'] = $data->data;

        $this->load->view($this->mainPage, $this->parseData);
    }

    public function postCreate()
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_post("session-access/create", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function editSession($id)
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_put("session-access/update/$id", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function deleteSession($id)
    {
        $req = $this->http_request_delete("session-access/delete/$id");

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function listSessionPeserta()
    {
        $this->parseData['content'] = 'admin/user/session';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['title_tab'] = "Sesi Peserta";

        $status = $this->input->get('status');
        $status = $status == null ? '1' : $status;

        $req    = $this->http_request_get("session-access/peserta?status=$status");
        $data   = $req->data;

        $this->parseData['pagination'] = $this->pagination($data);
        $this->parseData['data'] = $data->data;
        $this->parseData['status'] = $status;

        $this->load->view($this->mainPage, $this->parseData);
    }
}
