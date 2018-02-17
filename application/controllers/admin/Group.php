<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group extends CI_Controller {
	
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
		$order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'group';
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

		$query_params['select'] = "groups.*,departments.department";
		$query_params['limit'] = $limit;
		$query_params['offset'] = $offset;
		$query_params['order_by'] = $order_by;
		$query_params['direction'] = $direction;
		
		$total_rows = $this->group_model->get($query_params,true);
		$rows = $this->group_model->get($query_params);
		
		# array for pagination query string
		$qstr['order_by'] = $order_by;
		$qstr['direction'] = $direction;
		if($keyword) $qstr['keyword'] = $keyword;

		$page_query_string = '?'.http_build_query($qstr);
		$config['base_url'] = base_url('admin/group/index/'.$page_query_string);
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
		
		$this->data['selected_page'] = 'group';
		$this->load->view('admin/group', $this->data);
	}
	
	public function update()
	{
		$id = $this->input->get_post('id');

		// Set the validation rules
		$this->form_validation->set_rules('group', 'Group', 'required|trim');

		// If the validation worked
		if ($this->form_validation->run())
		{
            $get_post = $this->input->get_post(null,true);

			if($get_post['group'] != '' and $this->group_model->group_already_exists($get_post['group'], $id))
			{
				$_SESSION['msg_error'][] = 'Group already exist...';
			}
			else
			{
				unset($get_post['id']);

				if($id > 0) // update
                {
                    $notification_title = "Group updated";
                    $notification_message = "Group updated";
                    if($this->group_model->update($id,$get_post))
                    {
                        $_SESSION['msg_success'][] = 'Data Updated...';

                    }
                }
                else // insert
                {
                    $notification_title = "Group added";
                    $notification_message = "Group added";
                    if($id = $this->group_model->insert($get_post))
                    {
                        $_SESSION['msg_success'][] = 'Record added successfully...';
                    }
                }

                $entity = $this->group_model->get_group_by_id($id);
                $users = $this->db->get('users');
                foreach ($users->result() as $row)
                {
                    # Send push notification
                    $notification_payload = new stdClass();
                    $notification_payload->title = $notification_title;
                    $notification_payload->message = $notification_message;
                    $notification_payload->data = $entity;
                    $this->user_model->send_push_notification($row->user_id,$notification_payload,'IOS');
                }

                redirect('admin/group/');
			}
		}

		if($id > 0)
		$this->data['update_data'] = $this->group_model->get_group_by_id($id);
		
		$this->data['selected_page'] = 'group';
		$this->load->view('admin/group_update', $this->data);
	}
	
	public function delete()
	{
		$delete_id = $this->uri->segment(4) ? $this->uri->segment(4) : $this->input->get_post('delete_id');
		
		$this->group_model->delete($delete_id);
		$_SESSION['msg_error'][] = 'Record deleted successfully!';
		redirect('admin/group/');
	}

    public function search()
    {
        $tags = [];
        $keyword = $this->input->get_post('keyword');
        $query_params['offset'] = 0;
        $query_params['limit'] = 10;
        $query_params['keyword'] = $keyword;

        # get rows
        $this->db->like('group', $query_params['keyword']);
        $this->db->limit($query_params['limit'], $query_params['offset']);
        $query = $this->db->get('groups');
        //my_var_dump($this->db->last_query());
        foreach($query->result() as $row)
        {
            $tags[] = ['value' => $row->group_id, 'text' => $row->group];
        }

        echo json_encode($tags);
    }

    public function import_csv()
    {
        // Find and Replace a Line Break
        // http://blog.contextures.com/archives/2013/05/28/find-and-replace-line-breaks-in-excel/
        // Remove semi column `;` from csv data

        $table = "groups";
        $this->db->query("DELETE FROM $table");
        my_var_dump($this->db->last_query());
        $this->db->query("ALTER TABLE $table AUTO_INCREMENT=1;");
        my_var_dump($this->db->last_query());

        $this->load->library('csvreader');
        $result = $this->csvreader->parse_file("./uploads/$table.csv");
        //my_var_dump($result);
        foreach($result as $key => $csv_data)
        {
            //my_var_dump($csv_data);
            //exit;

            unset($csv_data['status']);
            $this->db->insert($table,$csv_data);
            $id = $this->db->insert_id();
            my_var_dump($this->db->last_query());
            //my_var_dump($id);
        }
    }
}

