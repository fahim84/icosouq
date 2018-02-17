<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	var $data;
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('admin/faq', $this->data);
	}
}
