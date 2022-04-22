<?php

class Setting extends MY_Controller
{
    private $mainPage = 'admin/index';
    public function __construct()
    {
        parent::__construct();
        $this->parseData['navbar'] = 'parts/admin/header';
        $this->parseData['sidebar'] = 'parts/admin/sidebar';
    }

    public function announcement()
    {
        $this->js[] = base_url('assets/js/pages/setting.js');
        $data = $this->http_request_get('template/list');

        $this->parseData['content'] = 'admin/setting/template/index';
        $this->parseData['title_tab'] = 'Template';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['templates'] = $data->data;
        $this->load->view('admin/index', $this->parseData);
    }

    public function createTemplate()
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_post("template/create", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function updateTemplate($id)
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_put("template/update/$id", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function deleteTemplate($id)
    {
        $req = $this->http_request_delete("template/delete/$id");
        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

}