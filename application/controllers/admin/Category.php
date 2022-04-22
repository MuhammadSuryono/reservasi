<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends MY_Controller
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

        $this->js[] = base_url() . 'assets/js/pages/category.js';
        $this->parseData['content'] = 'admin/category/index';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['title_tab'] = "Category";

        $req    = $this->http_request_get("category/list");
        $data   = $req->data;

        $this->parseData['pagination'] = $this->pagination($data);
        $this->parseData['data'] = $data->data;

        $this->load->view($this->mainPage, $this->parseData);
    }

    public function postCreate()
    {
        $body = [
            "name"  => $this->input->post('name')
        ];

        $req = $this->http_request_post("category/create", $body);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function editCategory($id)
    {
        $body = [
            "name"  => $this->input->post('name')
        ];

        $req = $this->http_request_put("category/update/$id", $body);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function deleteCategory($id)
    {
        $req = $this->http_request_delete("category/delete/$id");

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }
}
