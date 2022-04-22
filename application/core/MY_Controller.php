<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $BASE_URL;
    public $js = array();
    public $css = array();
    function __construct()
    {
        parent::__construct();
        $this->set_base_url('development');
    }

    public $parseData = [
        'navbar' => 'parts/navbar',
        'sidebar' => 'parts/sidebar',
        'modal' => 'parts/modal',
        'content' => 'errors/error',
        'footer' => 'parts/footer',
        'javascript' => array(),
        'css' => array(),
        'isLogin' => true,

        'title_budge' => 'Not Found!',
        'title_tab' => 'Mr.Toefl ID',
    ];

    public $config = [
        "first_link" => "First",
        "last_link" => "Last",
        "next_link" => "Next",
        "prev_link" => "Prev",
        "full_tag_open" => '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">',
        "full_tag_close" => "</ul></nav></div>",
        "num_tag_open" => '<li class="page-item"><span class="page-link">',
        "num_tag_close" => '</span></li>',
        "cur_tag_open" => '<li class="page-item active"><span class="page-link">',
        "cur_tag_close" => '<span class="sr-only">(current)</span></span></li>',
        "next_tag_open" => '<li class="page-item"><span class="page-link">',
        "next_tagl_close" => '<span aria-hidden="true">&raquo;</span></span></li>',
        "prev_tag_open" => '<li class="page-item"><span class="page-link">',
        "prev_tagl_close" => '</span>Next</li>',
        "first_tag_open" => '<li class="page-item"><span class="page-link">',
        "first_tagl_close" => '</span></li>',
        "last_tag_open" => '<li class="page-item"><span class="page-link">',
        "last_tagl_close" => '</span></li>',
    ];

    /***
     * @param array $body
     * @param $url
     * @param array $header
     * @return mixed
     */
    public function http_request_post($url, $body = [], $header = [])
    {
        $headr = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];

        if (isset($this->session->userdata("userData")->access_token)) {
            $headr[] = 'Authorization: Bearer ' . $this->session->userdata("userData")->access_token;
        }

        if (!empty($header)) $headr = array_merge($headr, $header);

        $crl = curl_init();

        curl_setopt_array($crl, array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,    // time-out on connect
            CURLOPT_TIMEOUT        => 60,    // time-out on response
            CURLOPT_URL => $this->BASE_URL . $url,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headr,
        ));


        $result = curl_exec($crl);
        $error = curl_error($crl);

        if (isset(json_decode($result)->response->code) && json_decode($result)->response->code == 401) {
            $this->session->unset_userdata("userIsLogin");
            $this->session->unset_userdata("userData");
            redirect(base_url());
        }

        curl_close($crl);

        log_message("info", "post ".$result);

        return json_decode($result);
    }

    /**
     * @param $url
     * @param $body
     * @return mixed
     */
    public function http_request_post_file($url, $body = [])
    {
        $headers = [
            'Content-Type: multipart/form-data',
            'Accept: application/json'
        ];

        if (isset($this->session->userdata("userData")->access_token)) {
            $headers[] = 'Authorization: Bearer ' . $this->session->userdata("userData")->access_token;
        }

        if (!empty($header)) $headers = array_merge($headers, $header);

        $filedata = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];

        $postfields = array("file" => "@$filedata");
        if (!empty($body)) $postfields = array_merge($postfields, $body);


        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $this->BASE_URL . $url,
            CURLOPT_HEADER => true,
            CURLOPT_POST => 1,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_INFILESIZE => $filesize,
            CURLOPT_RETURNTRANSFER => true
        ); // cURL options


        $close = curl_setopt_array($ch, $options);
        $result = curl_exec($ch);

        if (isset(json_decode($result)->response->code) && json_decode($result)->response->code == 401) {
            $this->session->unset_userdata("userIsLogin");
            $this->session->unset_userdata("userData");
            redirect(base_url());
        }

        curl_close($ch);

        return json_decode($result);
    }

    /***
     * @param array $body
     * @param $url
     * @param array $header
     * @return mixed
     */
    public function http_request_get($url, $body = [], $header = [], $is_json = false)
    {
        $headr = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];

        if (isset($this->session->userdata("userData")->access_token)) {
            $headr[] = 'Authorization: Bearer ' . $this->session->userdata("userData")->access_token;
        }

        if (!empty($header)) $headr = array_merge($headr, $header);

        $crl = curl_init();

        curl_setopt_array($crl, array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,    // time-out on connect
            CURLOPT_TIMEOUT        => 60,    // time-out on response
            CURLOPT_URL => $this->BASE_URL . $url,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headr,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));


        $result = curl_exec($crl);
        $error = curl_error($crl);

        if (isset(json_decode($result)->response->code) && json_decode($result)->response->code == 401) {
            $this->session->unset_userdata("userIsLogin");
            $this->session->unset_userdata("userData");
            redirect(base_url());
        }

        curl_close($crl);

        log_message("info", "get ".$result);

        return json_decode($result, $is_json);
    }

    public function http_request_put($url, $body = [], $header = [])
    {
        $headr = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];

        if (isset($this->session->userdata("userData")->access_token)) {
            $headr[] = 'Authorization: Bearer ' . $this->session->userdata("userData")->access_token;
        }

        if (!empty($header)) $headr = array_merge($headr, $header);

        $crl = curl_init();

        curl_setopt_array($crl, array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,    // time-out on connect
            CURLOPT_TIMEOUT        => 60,    // time-out on response
            CURLOPT_URL => $this->BASE_URL . $url,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headr,
            CURLOPT_CUSTOMREQUEST => 'PUT',
        ));


        $result = curl_exec($crl);
        $error = curl_error($crl);

        if (isset(json_decode($result)->response->code) && json_decode($result)->response->code == 401) {
            $this->session->unset_userdata("userIsLogin");
            $this->session->unset_userdata("userData");
            redirect(base_url());
        }

        curl_close($crl);

        log_message("info", "put ".$result);
        return json_decode($result);
    }

    public function http_request_delete($url, $body = [], $header = [])
    {
        $headr = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];

        if (isset($this->session->userdata("userData")->access_token)) {
            $headr[] = 'Authorization: Bearer ' . $this->session->userdata("userData")->access_token;
        }

        if (!empty($header)) $headr = array_merge($headr, $header);

        $crl = curl_init();

        curl_setopt_array($crl, array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,    // time-out on connect
            CURLOPT_TIMEOUT        => 60,    // time-out on response
            CURLOPT_URL => $this->BASE_URL . $url,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headr,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
        ));


        $result = curl_exec($crl);
        $error = curl_error($crl);

        if (isset(json_decode($result)->response->code) && json_decode($result)->response->code == 401) {
            $this->session->unset_userdata("userIsLogin");
            $this->session->unset_userdata("userData");
            redirect(base_url());
        }

        curl_close($crl);

        log_message("info", "delete ".$result);

        return json_decode($result);
    }

    private function base_url(string $environment)
    {
        switch ($environment) {
            case 'development':
                return 'http://156.67.218.146/cbt-be/api/v1/';
            case 'local':
                return 'http://localhost:8000/cbt-be/api/v1/';
            default:
                return '';
        }
    }

    private function set_base_url(string $environment)
    {
        $this->BASE_URL = $this->base_url($environment);
    }

    public function isLogin()
    {
        $isLogin = false;
        if ($this->session->userdata('userIsLogin')) $isLogin = true;

        return $isLogin;
    }

    public function lasth_path_url()
    {
        $url = $this->uri->segment(1);
        if ($url == 'login') $url = 'dashboard';
        return $url;
    }

    public function print_pretty($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    public function register_number()
    {
        return $this->session->userdata('sessionUser')->number_of_register;
    }

    public function get_session($key)
    {
        return $this->session->userdata($key);
    }

    public function set_session($key, $value)
    {
        $this->session->set_userdata($key, $value);
    }

    public function count_duration($assigned_time, $completed_time): string
    {
        $d1 = new DateTime($assigned_time);
        $d2 = new DateTime($completed_time);
        $interval = $d2->diff($d1);

        return $interval->format('%H : %I : %S');
    }

    public function convDayIndo($day): string
    {
        $days = [
          "Sunday" => "Minggu",
          "Monday" => "Senin",
          "Tuesday" => "Selasa",
          "Wednesday" => "Rabu",
          "Thursday" => "Kamis",
          "Friday" => "Jumat",
          "Saturday" => "Sabtu"
        ];
        return $days[$day];
    }
    
    public function pagination($data) 
    {
        $pageFirstParam = $data->current_page == 1;
        $pageLastParam = $data->current_page == $data->last_page;

        $pagination = [];
        $pagination['data'] = "";
        $pagination['first'] = '<li class="footable-page-arrow ' . ($pageFirstParam ? "disabled" : "") . '"><a data-page="first" href="' . (!$pageFirstParam ? base_url('admin/question?page=1') : "#") . '">&#171;</a></li>';
        $pagination['prev'] = '<li class="footable-page-arrow ' . ($pageFirstParam ? "disabled" : "") . '"><a data-page="prev" href="' . (!$pageFirstParam ? base_url('admin/question?page=' . ($data->current_page - 1)) : "#") . '">&#8249;</a></li>';
        foreach ($data->links as $value) {
            if ($value->label != "pagination.previous" && $value->label != "pagination.next") {
                $pagination['data'] .= "<li class='footable-page " . ($value->active ? 'active' : '') . "'><a data-page='" . $value->label . "' href='?page=" . $value->label . "'>" . $value->label . "</a></li>";
            }
        }
        $pagination['next'] = '<li class="footable-page-arrow ' . ($pageLastParam ? "disabled" : "") . '"><a data-page="next" href="' . (!$pageLastParam ? base_url('admin/question?page=' . ($data->current_page + 1)) : "#") . '">&#8250;</a></li>';
        $pagination['last'] = '<li class="footable-page-arrow ' . ($pageLastParam ? "disabled" : "") . '"><a data-page="last" href="' . (!$pageLastParam ? base_url('admin/question?page=' . $data->last_page) : "#") . '">&#187;</a></li>';

        return $pagination;
    }

    public function convSingleNumber($number)
    {
        $number = (int)$number;
        return $number <= 9 ? sprintf("0%d", $number) : $number;
    }
}
