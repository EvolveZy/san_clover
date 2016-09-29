<?php
/**
 * Created by PhpStorm.
 * User: zalmanzhao
 * Date: 9/26/2016
 * Time: 11:31 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $request = $_SERVER['REQUEST_METHOD'];
        $valid_user = false;
        $data = array();
        $data['message'] = '';

        if ($request == "POST") {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $sql = "select * from admin where user='" . $username . "' and password='" . md5($password) . "'";
            $result = $this->db->query($sql);
            if ($result->num_rows() > 0) {
                $row = $result->row();
                $this->session->set_userdata('admin_id', $row->id);
                $this->session->set_userdata('admin_username', $username);
                $this->session->set_userdata('admin_truename', $row->name);
                redirect("_admin/index");
            } else {
                $data['message'] = 'Invalid username or password.';
            }
        }
        $this->load->view("_admin/login", $data);
    }
}
?>