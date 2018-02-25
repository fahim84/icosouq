<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'libraries/ICObenchAPI.php');

class Welcome extends CI_Controller {

    var $data;

    /*public function index()
    {
        $listing = $this->input->get_post('listing') ? $this->input->get_post('listing') : 'live';
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
        $query_params['listing'] = $listing;

        $total_rows = $this->ico_model->get($query_params,true);
        $rows = $this->ico_model->get($query_params);

        # array for pagination query string
        $qstr['order_by'] = $order_by;
        $qstr['direction'] = $direction;
        $qstr['listing'] = $listing;
        if($keyword) $qstr['keyword'] = $keyword;

        $page_query_string = '?'.http_build_query($qstr);
        $config['base_url'] = base_url('welcome/index/'.$page_query_string);
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $limit;

        $this->pagination->initialize($config);
        $this->data['pagination_links'] = $this->pagination->create_links();
        // Paination code end

        $this->data['listing'] = $listing;
        $this->data['order_by'] = $order_by;
        $this->data['direction'] = $direction;
        $this->data['total_rows'] = $total_rows;
        $this->data['rows'] = $rows;

        $this->load->view($listing, $this->data);
    }*/

    public function index()
    {
        $listing = $this->input->get_post('listing') ? $this->input->get_post('listing') : 'ongoing';

        $order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'rating';
        $direction = $this->input->get_post('direction') ? $this->input->get_post('direction') : 'DESC';

        $keyword = $this->input->get_post('keyword');

        # Pagination Code
        $offset	=	$this->input->get_post('per_page');
        if($offset < 1)
        {
            $offset = 0;
        }

        if ($this->uri->segment(3)) { $limit = $this->uri->segment(3); }else{ $limit = 50; }

        if($keyword != '') $query_params['keyword'] = $keyword;

        $query_params['limit'] = $limit;
        $query_params['offset'] = $offset;
        $query_params['order_by'] = $order_by;
        $query_params['direction'] = $direction;
        $query_params['status'] = 1;
        $query_params['listing'] = $listing;

        $total_rows = $this->ico_model->get($query_params,true);
        $rows = $this->ico_model->get($query_params);

        # array for pagination query string
        $qstr['order_by'] = $order_by;
        $qstr['direction'] = $direction;
        $qstr['status'] = 1;
        $qstr['listing'] = $listing;
        if($keyword) $qstr['keyword'] = $keyword;

        $page_query_string = '?'.http_build_query($qstr);
        $config['base_url'] = base_url('admin/ico/index/'.$page_query_string);
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
        $this->data['listing'] = $listing;

        $this->data['selected_page'] = 'ico';

        $this->load->view('icobench_'.$listing, $this->data);
    }

    public function detail()
    {
        $id = $this->input->get_post('id');
        /*$api = new ICObenchAPI();
        $api->getICO($id);
        $api_response = json_decode($api->result);*/
        $ico = $this->ico_model->get_ico_by_id($id);
        $api_response = json_decode($ico->detail);

        $this->data['id'] = $id;
        $this->data['ico'] = $ico;
        $this->data['api_response'] = $api_response;
        $this->load->view('detail',$this->data);
    }

    public function test()
    {
        // PHP Example - Show all ICOs list
        $api = new ICObenchAPI();
        $api->getICO(2101);
        echo '<pre>';
        my_var_dump(json_decode($api->result));
        echo '</pre>';
    }
}
