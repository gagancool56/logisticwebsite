<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function get_post($postid = 0)
    {
        $data = array();
        if ($postid != 0 && !empty($postid)) {
            $this->db->where('postid', $postid);
        }
        $this->db->where('status', 'Y');
        $res = $this->db->select('post.*,users.username createdby')
            ->join('users', 'users.userid=post.createdby')
            ->get('post');
        if ($res->num_rows() > 0) {
            $data = $res->result_array();
        }
        return $data;
    }

    function save_post()
    {
        if ($this->input->post()) {
            $insert = $_POST;
            $insert['createdby'] = $_SESSION['userid'];

            $config['upload_path'] = './upload/blogs/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('coverimg')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
                return false;
            } else {
                $data = $this->upload->data('file_name');
                $insert['coverimg'] = $data;
            }

            if (!$this->db->insert('post', $insert)) {
                $this->session->set_flashdata('error', 'Something went wrong!');
                return false;
            }
            $this->session->set_flashdata('success', 'Record Saved Successfully!');
            return true;
        }
    }

    function revise_post($postid)
    {
        if ($this->input->post() && !empty($postid)) {
            $post = $_POST;

            if (!empty($_FILES['coverimg']['name'])) {
                $config['upload_path'] = './upload/blogs/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2000;
                $config['max_width'] = 1500;
                $config['max_height'] = 1500;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('coverimg')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error', $error);
                    return false;
                } else {
                    $data = $this->upload->data('file_name');
                    $post['coverimg'] = $data;
                }
            }
            if (!$this->db->where('postid', $postid)->update('post', $post)) {
                $this->session->set_flashdata('error', 'Something went wrong!');
                return false;
            }
            $this->session->set_flashdata('success', 'Record Revised Successfully!');
            return true;
        }
    }

    function delete_post($postid)
    {
        if ($this->input->post() && !empty($postid)) {
            $post = array('status', 'N');
            if (!$this->db->where('postid', $postid)->update('post', $post)) {
                return false;
            }
            return true;
        }
    }
}
