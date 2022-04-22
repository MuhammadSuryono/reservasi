<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Question extends MY_Controller
{
    private $mainPage = 'admin/index';

    public function __construct()
    {
        parent::__construct();
        $this->parseData['navbar'] = 'parts/admin/header';
        $this->parseData['sidebar'] = 'parts/admin/sidebar';
    }

    public function index($packetId)
    {
        array_push($this->js, base_url() . 'assets/js/pages/wysiwyg.js');
        array_push($this->js, base_url() . 'assets/js/pages/soalList.js');
        $this->parseData['content'] = 'admin/question/index';
        $this->parseData['css'] = $this->css;
        $this->parseData['title_tab'] = "Soal";

        $page = $this->input->get('page');

        $req = $this->http_request_get("question/list/".$packetId."?page=" . $page);
        $data = $req->data;

        $category = $this->http_request_get("category/list");
        $ctg = $category->data;

        $this->parseData['pagination'] = $this->pagination($data);
        $this->parseData['data'] = $data->data;
        $this->parseData['category'] = $ctg->data;
        $this->parseData['javascript'] = $this->js;
        $this->parseData['packetId'] = $packetId;

        $this->load->view($this->mainPage, $this->parseData);
    }

    public function createQuestionPage($id)
    {
        array_push($this->js, base_url() . 'assets/js/pages/wysiwyg.js');
        array_push($this->js, base_url() . 'assets/js/pages/soal.js');
        $this->parseData['content'] = 'admin/question/create';
        $this->parseData['title_tab'] = "Buat Soal";

        $getSoal = $this->http_request_get("group-question/list-question/$id/exam");
        $soal = $getSoal->data->data;

        $this->parseData['data'] = $soal;

        $show = false;
        $type = $this->input->get("type");
        $question = $this->input->get("question");
        $sequence = $this->input->get("sequence");
        $this->parseData['question'] = $question;
        if (isset($question) && $type == "edit") {
            $getSoalData = $this->http_request_get("exam-question/read/$question", [], [], true);
            $this->parseData['soal'] = $getSoalData['data'];
            $this->parseData['question'] = $this->getSequence($soal, $id, $question);
            $this->parseData['sequence'] = $sequence;
            $show = true;
        }

        if (isset($type) && $type == "add") {
            $show = true;
        }

        $this->parseData['show'] = $show;
        $this->parseData['list_question_id'] = $id;
        $this->parseData['type'] = $type;
        $this->parseData['javascript'] = $this->js;

//        echo '<pre>';
//        var_dump($getSoal);
//        echo '</pre>';
//        exit();

        $this->load->view($this->mainPage, $this->parseData);
    }

    public function postCreate()
    {
        $post = array();
        $post['is_publish'] = false;
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_post("question/create", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function updateList($id)
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }
        
        $req = $this->http_request_put("question/update/$id", $post);
        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function groupCreate()
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_post_file("group-question/create", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data, "result" => $req]);
    }

    public function groupEdit($id)
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_put("group/question/update/$id", $post);


        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function deleteGroup($id)
    {
        $req = $this->http_request_delete("group-question/delete/$id");

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function examCreate()
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_post("exam-question/create", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function examEdit($id)
    {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }

        $req = $this->http_request_put("exam-question/update/$id", $post);

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    private function getSequence($list, $listId, $idExam)
    {
        if (isset($list)) {
            $filter = array_filter($list, function ($item) use ($listId) {
                return $item->list_question_id == $listId;
            });


            $getSequenceExam = array_filter($filter[0]->sequence_exam, function ($item) use ($idExam) {
                return $item->id_exam == $idExam;
            });

            if (count($getSequenceExam) > 0) {
                $sequence = "";
                foreach ($getSequenceExam as $value) {
                    $sequence = $value->sequence;
                }

                return $sequence;
            } else {
                return null;
            }
        }
    }

    public function publish($status, $id)
    {
        $req = $this->http_request_post("question/$status/$id");

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }

    public function deleteListQuestion($id)
    {
        $req = $this->http_request_delete("question/delete/$id");

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message, "data" => $req->data]);
    }
}
