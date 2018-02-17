<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropdown extends CI_Controller {
	
	var $data;
	public function __construct()
	{
		parent::__construct();
		
		# if user is not logged in, then redirect him to login page
		if(! isset($_SESSION['user']->user_id) )
		{
			$_SESSION['redirect_to_last_url'] = current_url();
			redirect(base_url().'admin/login/','location');
		}
	}
	
	public function index()
	{
		$order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'dropdown,sequence';
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
		
		$total_rows = $this->dropdown_model->get($query_params,true);
		$rows = $this->dropdown_model->get($query_params);
		
		# array for pagination query string
		$qstr['order_by'] = $order_by;
		$qstr['direction'] = $direction;
		if($keyword) $qstr['keyword'] = $keyword;

		$page_query_string = '?'.http_build_query($qstr);
		$config['base_url'] = base_url('admin/dropdown/index/'.$page_query_string);
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
		
		$this->data['selected_page'] = 'dropdown';
		$this->load->view('admin/dropdown', $this->data);
	}
	
	public function update()
	{
		$id = $this->input->get_post('id');

		// Set the validation rules
		$this->form_validation->set_rules('dropdown', 'Dropdown Name', 'required|trim');
		$this->form_validation->set_rules('key', 'Key', 'required|trim');
		$this->form_validation->set_rules('value', 'Value', 'required|trim');

		// If the validation worked
		if ($this->form_validation->run())
		{
            $get_post = $this->input->get_post(null,true);

            unset($get_post['id']);

            if($id > 0) // update
            {
                if($this->dropdown_model->update($id,$get_post))
                {
                    $_SESSION['msg_success'][] = 'Data Updated...';

                    redirect('admin/dropdown/');
                }
            }
            else // insert
            {
                if($this->dropdown_model->insert($get_post))
                {
                    $_SESSION['msg_success'][] = 'Record added successfully...';
                    redirect('admin/dropdown/');
                }
            }
		}

		if($id > 0)
		$this->data['update_data'] = $this->dropdown_model->get_dropdown_by_id($id);
		
		$this->data['selected_page'] = 'dropdown';
		$this->load->view('admin/dropdown_update', $this->data);
	}
	
	public function delete()
	{
		$delete_id = $this->uri->segment(4) ? $this->uri->segment(4) : $this->input->get_post('delete_id');
		
		$this->dropdown_model->delete($delete_id);
		$_SESSION['msg_error'][] = 'Record deleted successfully!';
		redirect('admin/dropdown/');
	}
}

