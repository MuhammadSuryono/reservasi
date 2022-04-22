<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packet extends MY_Controller
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
        $this->js[] = base_url() . 'assets/js/pages/packet.js';
        $this->parseData['content'] = 'admin/packet/index';
        $this->parseData['css'] = $this->css;
        $this->parseData['title_tab'] = "Paket Soal";

        $page = $this->input->get('page');

        $req = $this->http_request_get("packet/list?page=" . $page);
        $data = $req->data;

        $this->parseData['pagination'] = $this->pagination($data);
        $this->parseData['data'] = $data->data;
        $this->parseData['javascript'] = $this->js;

        $this->load->view($this->mainPage, $this->parseData);
    }

    public function postCreate()
    {
        $post = array();
        $post['is_publish'] = false;
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_post("packet/create", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function updatePacket($id)
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }
        
        $req = $this->http_request_put("packet/update/$id", $post);
        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function publish($status, $id)
    {
        $req = $this->http_request_post("packet/$status/$id");

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function deletePacket($id)
    {
        $req = $this->http_request_delete("packet/delete/$id");

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }
}
