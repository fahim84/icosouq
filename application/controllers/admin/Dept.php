<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dept extends CI_Controller {
	
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
		$order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'department';
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
		
		$total_rows = $this->dept_model->get($query_params,true);
		$rows = $this->dept_model->get($query_params);
		
		# array for pagination query string
		$qstr['order_by'] = $order_by;
		$qstr['direction'] = $direction;
		if($keyword) $qstr['keyword'] = $keyword;

		$page_query_string = '?'.http_build_query($qstr);
		$config['base_url'] = base_url('admin/dept/index/'.$page_query_string);
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
		
		$this->data['selected_page'] = 'dept';
		$this->load->view('admin/dept', $this->data);
	}
	
	public function update()
	{
		$id = $this->input->get_post('id');

		// Set the validation rules
		$this->form_validation->set_rules('department', 'Department', 'required|trim');

		// If the validation worked
		if ($this->form_validation->run())
		{
            $get_post = $this->input->get_post(null,true);

            $delete_old_file = $this->input->get_post('delete_old_file');
            $uploaded_file_array = (isset($_FILES['image']) and $_FILES['image']['size'] > 0 and $_FILES['image']['error'] == 0) ? $_FILES['image'] : '';
            # Show uploading error only when the file uploading attempt exist.
            if( is_array($uploaded_file_array) )
            {
                $delete_old_file = true;
            }

            # File uploading configuration
            $upload_path = './uploads/departments/';
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = true;
            $config['max_size'] = 51200; //KB

            $this->load->library('upload', $config);

            $oldfile = $this->input->get_post('oldfile');
            if($delete_old_file)
            {
                # Delete old file if there was any
                if(delete_file($upload_path.$oldfile))
                {
                    $_SESSION['msg_success'][] = " $oldfile file deleted. ";
                    $this->dept_model->update($id,['image'=>'']);
                }
            }

            # Try to upload file now
            if ($this->upload->do_upload('image'))
            {
                # Get uploading detail here
                $upload_detail = $this->upload->data();

                $get_post['image'] = $upload_detail['file_name'];
                $image = $get_post['image'];

                # Get width and height and resize image keeping aspect ratio same
                $image_path = $upload_path.$image;
                $width = get_width($image_path);
                $width > 800 ? resize_image2($image_path, 800, '', 'W') : '';
                $height = get_height($image_path);
                $height > 600 ? resize_image2($image_path, '', 600, 'H') : '';
            }
            else
            {
                $uploaded_file_array = (isset($_FILES['image']) and $_FILES['image']['name']!='') ? $_FILES['image'] : '';

                # Show uploading error only when the file uploading attempt exist.
                if( is_array($uploaded_file_array) )
                {
                    $uploading_error = $this->upload->display_errors();
                    $_SESSION['msg_error'][] = $uploading_error;
                }
            }

			if($get_post['department'] != '' and $this->dept_model->department_already_exists($get_post['department'], $id))
			{
				$_SESSION['msg_error'][] = 'Department already exist...';
			}
			else
			{
				unset($get_post['id']);
                unset($get_post['oldfile']);
                unset($get_post['delete_old_file']);

				if($id > 0) // update
                {
                    $notification_title = "Department updated";
                    $notification_message = "Department updated";
                    if($this->dept_model->update($id,$get_post))
                    {
                        $_SESSION['msg_success'][] = 'Data Updated...';
                    }
                }
                else // insert
                {
                    $notification_title = "Department added";
                    $notification_message = "Department added";
                    if($id = $this->dept_model->insert($get_post))
                    {
                        $_SESSION['msg_success'][] = 'Record added successfully...';
                    }
                }

                $entity = $this->dept_model->get_department_by_id($id);
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

                redirect('admin/dept/');
			}
		}

		if($id > 0)
		$this->data['update_data'] = $this->dept_model->get_department_by_id($id);
		
		$this->data['selected_page'] = 'dept';
		$this->load->view('admin/dept_update', $this->data);
	}
	
	public function delete()
	{
		$delete_id = $this->uri->segment(4) ? $this->uri->segment(4) : $this->input->get_post('delete_id');
		
		$this->dept_model->delete($delete_id);
		$_SESSION['msg_error'][] = 'Record deleted successfully!';
		redirect('admin/dept/');
	}

    public function search()
    {
        $tags = [];
        $keyword = $this->input->get_post('keyword');
        $query_params['offset'] = 0;
        $query_params['limit'] = 10;
        $query_params['keyword'] = $keyword;

        # get rows
        $this->db->like('department', $query_params['keyword']);
        $this->db->limit($query_params['limit'], $query_params['offset']);
        $query = $this->db->get('departments');
        //my_var_dump($this->db->last_query());
        foreach($query->result() as $row)
        {
            $tags[] = ['value' => $row->dept_id, 'text' => $row->department];
        }

        echo json_encode($tags);
    }

    public function import_csv()
    {
        // Find and Replace a Line Break
        // http://blog.contextures.com/archives/2013/05/28/find-and-replace-line-breaks-in-excel/
        // Remove semi column `;` from csv data

        $table = "departments";
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
        }
    }
}

