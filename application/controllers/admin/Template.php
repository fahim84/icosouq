<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends CI_Controller {
	
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
		$order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'template_id';
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
		
		$total_rows = $this->template_model->get($query_params,true);
		$rows = $this->template_model->get($query_params);
		
		# array for pagination query string
		$qstr['order_by'] = $order_by;
		$qstr['direction'] = $direction;
		if($keyword) $qstr['keyword'] = $keyword;

		$page_query_string = '?'.http_build_query($qstr);
		$config['base_url'] = base_url('admin/template/index/'.$page_query_string);
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
		
		$this->data['selected_page'] = 'template';
		$this->load->view('admin/template', $this->data);
	}
	
	public function update()
	{
		$id = $this->input->get_post('id');

		// Set the validation rules
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('message', 'Message', 'required|trim');

		// If the validation worked
		if ($this->form_validation->run())
		{
            $get_post = $this->input->get_post(null,true);

            unset($get_post['id']);

            if($id > 0) // update
            {
                if($this->template_model->update($id,$get_post))
                {
                    $_SESSION['msg_success'][] = 'Data updated...';

                }
            }
            else // insert
            {
                if($id = $this->template_model->insert($get_post))
                {
                    $_SESSION['msg_success'][] = 'Record added successfully...';
                }
            }

            redirect('admin/template/');
		}

		if($id > 0)
		$this->data['update_data'] = $this->template_model->get_template_by_id($id);
		
		$this->data['selected_page'] = 'template';
		$this->load->view('admin/template_update', $this->data);
	}
	
	public function delete()
	{
		$delete_id = $this->uri->segment(4) ? $this->uri->segment(4) : $this->input->get_post('delete_id');
		
		$this->template_model->delete($delete_id);
		//my_var_dump($this->db->last_query());
		$_SESSION['msg_error'][] = 'Record deleted successfully!';
		redirect('admin/template/');
	}

    public function change_status()
    {
        $id = $this->input->get_post('id');
        $status = $this->input->get_post('status');

        $this->template_model->update($id,['status'=>$status]);

        my_var_dump($this->db->last_query());
    }
}

