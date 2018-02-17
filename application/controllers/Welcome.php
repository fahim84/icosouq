<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    var $data;
	public function index()
	{
        $this->data['keyword'] = 'keyword';
		$this->load->view('index',$this->data);
	}

    public function detail()
    {
        $this->data['keyword'] = 'keyword';
        $this->load->view('detail',$this->data);
    }
}
