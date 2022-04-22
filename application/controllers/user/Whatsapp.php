<?php

class Whatsapp extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sendMessage()
    {
        $nomor = ["0895355698652", "081235327853"];
        foreach ($nomor as $no) {
            $this->sendToProvider($no);
        }
    }

    public function sendToProvider($phoneNumber)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://nusagateway.com/api/send-message.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('token' => 'NWsnmw7pTGhuQbNyyY8zXKfQLd77BeOvTshf3YEcDSfFvjuVHZ','phone' => $phoneNumber,'message' => $this->message()),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
    }

    public function message(): string
    {
        $data = json_decode(file_get_contents('php://input'), true);
        return '
Nomor Registrasi: '.$this->register_number().'
Laporan : '.$data["laporan"].'
';
    }
}