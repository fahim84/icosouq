<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    var $data;

    public function index()
    {
        $order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'ico';
        $direction = $this->input->get_post('direction') ? $this->input->get_post('direction') : 'ASC';

        $keyword = $this->input->get_post('keyword');

        # Pagination Code
        $offset	=	$this->input->get_post('per_page');
        if($offset < 1)
        {
            $offset = 0;
        }

        if ($this->uri->segment(4)) { $limit = $this->uri->segment(4); }else{ $limit = 10; }

        if($keyword != '') $query_params['keyword'] = $keyword;

        $query_params['limit'] = $limit;
        $query_params['offset'] = $offset;
        $query_params['order_by'] = $order_by;
        $query_params['direction'] = $direction;

        $total_rows = $this->ico_model->get($query_params,true);
        $rows = $this->ico_model->get($query_params);

        # array for pagination query string
        $qstr['order_by'] = $order_by;
        $qstr['direction'] = $direction;
        if($keyword) $qstr['keyword'] = $keyword;

        $page_query_string = '?'.http_build_query($qstr);
        $config['base_url'] = base_url('welcome/index/'.$page_query_string);
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $limit;

        $this->pagination->initialize($config);
        $this->data['pagination_links'] = $this->pagination->create_links();
        // Paination code end

        $this->data['keyword'] = $keyword;
        $this->data['order_by'] = $order_by;
        $this->data['direction'] = $direction;
        $this->data['total_rows'] = $total_rows;
        $this->data['rows'] = $rows;

        $this->data['selected_page'] = 'ico';
        $this->load->view('index', $this->data);
    }

    public function detail()
    {
        $this->data['keyword'] = 'keyword';
        $this->load->view('detail',$this->data);
    }
}
