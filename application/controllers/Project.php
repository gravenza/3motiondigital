<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('project');
		$this->load->view('footer');
		$this->load->view('sidebar');
	}
}
