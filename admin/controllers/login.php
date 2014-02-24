<?php
/**
 * User: cxx
 * Date: 2/24/14
 * Time: 9:50 PM
 */

class login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->setting->load('backend');
        $this->load->switch_theme('backend');
    }

    function index() {
        if ($this->session->userdata('uid')) {
            redirect( setting('backend_access_point') .'/system/home');
        } else {
            $this->load->view('sys_login');
        }

    }
}