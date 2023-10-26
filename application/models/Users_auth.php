<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function login()
    {
        if ($this->input->post()) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $res = $this->db->where('username', $username)->where('password', $password)->get('users');
            if ($res->num_rows() > 0) {
                extract($res->result_array()[0]);
                $_SESSION['userid'] = $userid;
                $_SESSION['username'] = $username;
                $_SESSION['Name'] = $fname . ' ' . $lname;
                $_SESSION['active'] = $active;
                return true;
            } else {
                return false;
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
}
