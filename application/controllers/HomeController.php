<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	private $data;
	public function __construct()
	{
		parent::__construct();
		$this->data['url'] = $this->uri->uri_string();
	}
	public function index()
	{
		$this->load->model('blogs');
		$data['posts'] = $this->blogs->get_post();
		$data['url'] = $this->data['url'];
		$this->load->view('index', $data);
	}
	public function pages($page)
	{
		$this->load->view($page, $this->data);
	}
	public function services($page)
	{
		$this->load->view('services/' . $page, $this->data);
	}

	function blogs()
	{
		$this->load->model('blogs');
		$data['posts'] = $this->blogs->get_post();
		$data['url'] = $this->data;
		$this->load->view('blog', $data);
	}
	function showblogs($postid)
	{
		$this->load->model('blogs');
		$data['post'] = $this->blogs->get_post($postid)[0];
		$data['posts'] = $this->blogs->get_post();
		$data['url'] = $this->data;
		$this->load->view('showblog', $data);
	}
}
