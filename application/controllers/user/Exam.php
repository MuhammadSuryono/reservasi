<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends MY_Controller
{
    private $mainPage = 'user/index';
    public function __construct()
    {
        parent::__construct();
        $this->parseData['navbar'] = 'parts/user/header';
    }

    public function index()
    {
        $this->session->sess_destroy();
        $session = $this->input->get('session', TRUE);
        $this->parseData['content'] = 'user/home';
        $this->parseData['form_session'] = isset($session) && $session == 'check-exam' ? 'user/session/form/check-exam' : 'user/session/form/start-session';

        $this->js[] = base_url() . 'assets/js/pages/exam/session.js';
        $this->parseData['javascript'] = $this->js;
        $this->load->view($this->mainPage, $this->parseData);
    }

    public function peserta()
    {
        $this->session->sess_destroy();
        $session = $this->input->get('session', TRUE);
        $this->parseData['content'] = 'user/peserta';
        $this->parseData['form_session'] = isset($session) && $session == 'check-exam' ? 'user/session/form/check-exam' : 'user/session/form/start-session';

        $this->js[] = base_url() . 'assets/js/pages/exam/session.js';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['peserta'] = $this->db->get('tb_peserta')->result();
        $this->load->view($this->mainPage, $this->parseData);
    }

    public function exam_sample($sessionQuiz)
    {
        $action = $this->input->get('action', TRUE);
        $sectionSubmit = $this->input->get('section-submit', TRUE);

        $this->js[] = base_url() . 'assets/js/pages/exam/question.js';
        $sessionSection = $this->get_session('sessionSection');
        $sessionGroup = $this->get_session('sessionGroup');
        $registerNumber = $this->register_number();
        $listQuestionId = $sessionSection->first_group->list_question_id;

        if ($sessionGroup != null) {
            if ($sessionGroup->current_group == $sessionGroup->next_group && $sectionSubmit == 'true') {
                $sectionId = $this->get_session('sessionLastSection');
                $this->http_request_post('exam-question/push/section', ["register_number" => $registerNumber, "section_id" => $sectionId, "list_question_id" => $listQuestionId]);
                redirect('exam/section/' . $sessionQuiz);
            }
        }

        if ($sessionGroup == null) {
            $groupQuestionId = $sessionSection->first_group->id;
            $reqQuestions = $this->http_request_get('exam-question/list-question/'.$listQuestionId.'/group/'.$groupQuestionId.'?number-register='.$registerNumber);

            $this->parseData['questions'] = $reqQuestions->data;
            $this->set_session("sessionGroup", $reqQuestions->data);
        } else {
            if ($action == 'next') {
                $groupQuestionId = $sessionGroup->next_group;
                $reqQuestions = $this->http_request_get('exam-question/list-question/'.$listQuestionId.'/group/'.$groupQuestionId.'?number-register='.$registerNumber);

                $this->parseData['questions'] = $reqQuestions->data;
                $this->set_session("sessionGroup", $reqQuestions->data);
            } else if ($action == 'previous') {
                $groupQuestionId = $sessionGroup->previous_group;
                $reqQuestions = $this->http_request_get('exam-question/list-question/'.$listQuestionId.'/group/'.$groupQuestionId.'?number-register='.$registerNumber);

                $this->parseData['questions'] = $reqQuestions->data;
                $this->set_session("sessionGroup", $reqQuestions->data);
            } else {
                $groupQuestionId = $sessionSection->first_group->id;
                $reqQuestions = $this->http_request_get('exam-question/list-question/'.$listQuestionId.'/group/'.$groupQuestionId.'?number-register='.$registerNumber);

                $this->parseData['questions'] = $reqQuestions->data;
                $this->set_session("sessionGroup", $reqQuestions->data);
            }
        }

        $this->parseData['registerNumber'] = $registerNumber;
        $this->parseData['sectionData'] = $sessionSection;
        $this->parseData['content'] = 'user/question_exam';
        $this->parseData['token'] = $sessionQuiz;
        $this->parseData['javascript'] = $this->js;

        $this->load->view($this->mainPage, $this->parseData);
    }

    public function exam_set_session_start()
    {
        $userData = [
            'userIsStartSession' => true,
        ];
        $this->session->set_userdata($userData);
        echo json_encode($this->input);
    }

    public function register_form($token)
    {
        $this->parseData['content'] = 'user/session/form/register-exam';

        $this->js[] = base_url() . 'assets/js/pages/exam/register.js';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['token'] = $token;
        $this->load->view($this->mainPage, $this->parseData);
    }

    public function resume_register($token)
    {
        $this->js[] = base_url() . 'assets/js/pages/exam/register.js';

        $this->parseData['content'] = 'user/session/resume-data-register';
        $this->parseData['javascript'] = $this->js;
        $this->parseData["userData"] = $this->session->userdata("sessionUser");
        $this->parseData["sessionData"] = $this->session->userdata('sessionData');
        $this->load->view($this->mainPage, $this->parseData);
    }

    public function resume_exam($token)
    {
        $withDataResume = false;
        $registerNumber = $this->register_number();
        if ($withDataResume == true) {
            $resumeDataExam = $this->http_request_get('exam-question/resume/result/'.$registerNumber);
            $this->parseData['resumeDataExam'] = $resumeDataExam->data;
        }
        $templateAttention = $this->http_request_get('template/read/3');

        $this->parseData['resumeDataExam'] = $resumeDataExam->data;
        $this->parseData['content'] = 'user/resume_exam';
        $this->parseData["userData"] = $this->get_session('sessionUser');
        $this->parseData["sessionExam"] = $this->get_session('sessionSection')->last_session;
        $this->parseData['javascript'] = $this->js;
        $this->parseData['withDataResume'] = $withDataResume;
        $this->parseData['dataSession'] = $this->get_session('sessionData');

        $dateSchedule = $this->parseData['dataSession']->schedule_announcement;
        $parseDate = strtotime($dateSchedule);
        $date = date('d-m-Y', $parseDate);
        $day = date('l', $parseDate);

        $vars = array(
            '[hari_pengumuman]' => $this->convDayIndo($day),
            '[tanggal_pengumuman]' => $date,
            '[nama_sesi]' => $this->parseData['dataSession']->session_name,
            '[hari_sesi]' => $this->parseData['dataSession']->session_day,
            '[jam_mulai_sesi]' => $this->parseData['dataSession']->start_time,
            '[jam_selesai_sesi]' => $this->parseData['dataSession']->end_time,
        );

        $templateAttention->data->template = strtr($templateAttention->data->template, $vars);

        $this->parseData['templateAttention'] = $templateAttention->data;
        $assigned_time = $this->parseData["sessionExam"]->start_at;
        $completed_time= $this->parseData["sessionExam"]->finish_at;

        $this->parseData["duration"] = $this->count_duration($assigned_time, $completed_time);

         $this->load->view($this->mainPage, $this->parseData);
    }

    public function register_peserta()
    {
        $sessionData = $this->http_request_get("session-access/session/". $this->input->post('token'));

        $body = [
            "token"             => $this->input->post('token'),
            "session_id"        => $sessionData->data->id,
            "full_name"         => $this->input->post('full_name'),
            "place_of_birth"    => $this->input->post('place_of_birth'),
            "date_of_birth"     => $this->input->post('year') . "-". $this->convSingleNumber($this->input->post('month')) . "-". $this->convSingleNumber($this->input->post('date')),
            "email"             => $this->input->post('email'),
            "phone_number"      => $this->input->post('phone_number'),
            "address"           => $this->input->post('address'),
        ];

        $req = $this->http_request_post("user-participant/create", $body);

        if ($req->response->code != 200) {
            echo json_encode(["status" => $req->response->code, "message" => $req->response->message ,"data" => $req->data]);
            exit();
        }

        $this->session->set_userdata("sessionData", $sessionData->data);
        $this->session->set_userdata("sessionToken", $this->input->post('token'));
        $this->session->set_userdata("sessionKey", $sessionData->data->session_key);
        $this->session->set_userdata("sessionUser", $req->data);


        echo json_encode(["status" => $req->response->code, "message" => $req->response->message ,"data" => $this->session]);
    }

    public function finish_register()
    {
        $token = $this->session->userdata("sessionToken");
        $userRegister = $this->session->userdata("sessionUser")->number_of_register;

        $req = $this->http_request_post("log-user/update", ["token" => $token, "number_of_register" => $userRegister]);

        if ($req->response->code == 200) {
            $this->session->set_userdata("alreadyRegister", true);
        }

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message ,"data" => ["token" => $token, "number_of_register" => $userRegister]]);
    }

    public function section($token)
    {
        $registerNumber = $this->register_number();
        $sectionData = $this->get_session('sessionSection');
        $query = "";
        if ($sectionData != null) {
            $query = "?category=".$sectionData->questions->question_category_id;
        }

        $dataSection = $this->http_request_get("question/section/". $registerNumber.$query);

        if ($dataSection->response->code == 200) {
            $this->session->set_userdata("sessionLastSection", $dataSection->data->questions->section_id);
            $this->session->set_userdata("sessionSection", $dataSection->data);
        }
        $this->parseData['dataSection'] = $dataSection->data->questions;
        $this->parseData['content'] = 'user/session/welcome-section';
        $this->parseData['lastSection'] = $dataSection->data->last_session;
        $this->parseData['token'] = $this->get_session('sessionToken');

        $this->load->view($this->mainPage, $this->parseData);
    }

    public function start_exam()
    {
        $registerNumber = $this->register_number();
        $req = $this->http_request_post('session-access/start-exam', ["register_number" => $registerNumber]);

        $sessionSection = $this->get_session('sessionSection');
        $sessionSection->last_session = $req->data;
        $this->set_session('sessionSection', $sessionSection);

        $token = $this->get_session('sessionToken');
        redirect(base_url() . 'exam/start/' . $token);

    }

    public function finish_exam()
    {
        $registerNumber = $this->register_number();
        $req = $this->http_request_post('session-access/end-exam', ["register_number" => $registerNumber]);

        $sessionSection = $this->get_session('sessionSection');
        $sectionId = $this->get_session('sessionLastSection');
        $listQuestionId = $sessionSection->first_group->list_question_id;
        $this->http_request_post('exam-question/push/section', ["register_number" => $registerNumber, "section_id" => $sectionId, "list_question_id" => $listQuestionId]);

        $sessionSection = $this->get_session('sessionSection');
        $sessionSection->last_session = $req->data;
        $this->set_session('sessionSection', $sessionSection);

        $token = $this->get_session('sessionToken');
        echo json_encode(["status" => $req->response->code, "message" => $req->response->message ,"data" => $req->data]);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function session_access_check()
    {
        $data = [];
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        $this->db->insert('tb_peserta', $data);
        echo json_encode(["status" => 200, "message" => "Success" ,"data" => $data]);
    }

    public function check_exam_result()
    {
        $registerNumber = $this->input->post('register_number');
        $req = $this->http_request_get(sprintf('exam-result/check/%s', $registerNumber));

        if ($req->response->code == 200) {
            $this->set_session('userIsStartSession', true);
            $this->set_session('registerNumber', $registerNumber);
        }

        echo json_encode(["status" => $req->response->code, "message" => $req->response->message ,"data" => $req->data]);
    }

    public function result_exam_page()
    {
        $this->parseData['content'] = 'user/result-exam';

        $req = $this->http_request_get('user-participant/user/overview/'.$this->get_session('registerNumber'));

        $this->parseData['dataResult'] = $req->data;
        $this->parseData['registerNumber'] = $this->get_session('registerNumber');
        $this->load->view($this->mainPage, $this->parseData);
    }
}