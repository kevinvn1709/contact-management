<?php

class GoogleService {
    private $link_oauth = 'https://accounts.google.com/o/oauth2/token';
    private $link_api = 'https://www.googleapis.com/plus/v1/people/me';
    private $link_directory = 'https://www.googleapis.com/admin/directory/v1/users';
    private $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('Curl', NULL, 'Curl');
    }

    public function oauth($access_token) {
        $data = 'code=' . $access_token . '&' .
            'client_id=' . GOOGLE_CLIENT_ID . '&' .
            'client_secret=' . GOOGLE_CLIENT_SECRET . '&' .
            'redirect_uri=postmessage&' .
            'grant_type=authorization_code';
        $header = array('Content-Type: application/x-www-form-urlencoded');
        $this->CI->Curl->set_http_header($header);

        $json = $this->CI->Curl->post($this->link_oauth, $data);
        return empty($json) == FALSE ? json_decode($json, TRUE) : FALSE;
    }

    public function get_info($access_token) {
        $link = $this->link_api . '/?access_token=' . $access_token;
        $json = $this->CI->Curl->get($link);
        return empty($json) == FALSE ? json_decode($json, TRUE) : FALSE;
    }

    public function retrieve_all_user($access_token) {
        $header = array(
            'Authorization: Bearer ' . $access_token
        );
        $this->CI->Curl->set_http_header($header);
        $link = $this->link_directory . '/?domain=nedcoffee.vn';
        $json = $this->CI->Curl->get($link);
        return empty($json) == FALSE ? json_decode($json, TRUE) : FALSE;
    }

    public function update_info($username, $access_token, $data) {
        $header = array(
            'Authorization: Bearer ' . $access_token,
            'Content-type: application/json'
        );
        $data = $this->convert_data($data);
        $data = json_encode($data);
        $this->CI->Curl->set_http_header($header);
        $link = $this->link_directory . '/' . $username;
        $json = $this->CI->Curl->put($link, $data);
        return empty($json) == FALSE ? json_decode($json, TRUE) : FALSE;
    }


    public function get_avatar($access_token, $email) {
        $header = array(
            'Authorization: Bearer ' . $access_token
        );
        $this->CI->Curl->set_http_header($header);
        $link = $this->link_directory . '/' . $email . '/photos/thumbnail';
        $json = $this->CI->Curl->get($link);
        return empty($json) == FALSE ? json_decode($json, TRUE) : FALSE;
    }

    public function insert_contact($data_update, $access_token) {
        $header = array(
            'Authorization: Bearer ' . $access_token,
            'Content-type: application/json'
        );
        $data_update = $this->convert_data($data_update);
        $data = json_encode($data_update);
        $this->CI->Curl->set_http_header($header);
        $link = $this->link_directory;
        $json = $this->CI->Curl->post($link, $data);
        return empty($json) == FALSE ? json_decode($json, TRUE) : FALSE;
    }

    public function delete_contact($email, $access_token) {
        $header = array(
            'Authorization: Bearer ' . $access_token,
            'Content-type: application/json'
        );
        $this->CI->Curl->set_http_header($header);
        $link = $this->link_directory . '/' . $email;
        $this->CI->Curl->delete($link);
    }

    private function convert_data($params) {
        $data_convert = array(
            'primaryEmail' => $params['email_work'],
            'name' => array(
                'givenName' => $params['first_name'],
                'familyName' => $params['last_name'],
                'fullName' => $params['first_name'] . ' ' . $params['last_name'],
            ),
        );

        if (empty($params['password']) == FALSE) {
            $data_convert['password'] = $params['password'];
        }

        if (empty($params['email_work']) == FALSE) {
            $data_convert['emails'][] = array(
                'address' => $params['email_work'],
                'type' => 'work',
            );
        }

        if (empty($params['email']) == FALSE) {
            $data_convert['emails'][] = array(
                'address' => $params['email'],
                'type' => 'home',
            );
        }

        if (empty($params['phone']) == FALSE) {
            $data_convert['phones'][] = array(
                'value' => $params['phone'],
                'type' => 'work',
            );
        }

        if (empty($params['phone_mobile']) == FALSE) {
            $data_convert['phones'][] = array(
                'value' => $params['phone_mobile'],
                'type' => 'work',
            );
        }

        if (empty($params['phone_home']) == FALSE) {
            $data_convert['phones'][] = array(
                'value' => $params['phone_home'],
                'type' => 'home',
            );
        }

        if (empty($params['address']) == FALSE) {
            $data_convert['addresses'][] = array(
                'type' => 'work',
                'customType' => '',
                'streetAddress' => $params['address'],
                'locality' => '',
                'region' => '',
                'primary' => TRUE,
                'postalCode' => ''
            );
        }

        return $data_convert;
    }
}