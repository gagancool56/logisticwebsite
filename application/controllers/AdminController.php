<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_auth');
    }

    function index()
    {
        if ($this->input->post()) {
            $this->users_auth->login();
        }

        if (!$this->session->userdata('userid')) {
            $this->load->view('admin/login');
        } else {
            $this->load->view('admin/index');
        }
    }

    function blogs()
    {
        $this->load->model('blogs');
        $data['posts'] = $this->blogs->get_post();
        $this->load->view('admin/blogs/blogs', $data);
    }

    function create_blogs()
    {
        if ($this->input->post()) {
            // pr($_POST,1);
            $this->load->model('blogs');
            if ($this->blogs->save_post()) {
                redirect('admin/blogs');
            }
        } else {
            $this->load->view('admin/blogs/create-blog');
        }
    }

    function revise_blog($postid)
    {
        $this->load->model('blogs');
        if ($this->input->post()) {
            // pr($_POST,1);
            if ($this->blogs->revise_post($postid)) {
                redirect('admin/blogs');
            }
        } else {
            $data['post'] = $this->blogs->get_post($postid)[0];
            $this->load->view('admin/blogs/revise-blog', $data);
        }
    }

    function career()
    {
        $this->load->model('career');
        $data['career'] = $this->career->get_career();
        $this->load->view('admin/career/career', $data);
    }
}
