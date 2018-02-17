<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stakeholder extends CI_Controller {
	
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
		$order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'stakeholder_id';
		$direction = $this->input->get_post('direction') ? $this->input->get_post('direction') : 'DESC';
		
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
		
		$total_rows = $this->stakeholder_model->get($query_params,true);
		$rows = $this->stakeholder_model->get($query_params);
		
		# array for pagination query string
		$qstr['order_by'] = $order_by;
		$qstr['direction'] = $direction;
		if($keyword) $qstr['keyword'] = $keyword;

		$page_query_string = '?'.http_build_query($qstr);
		$config['base_url'] = base_url('admin/stakeholder/index/'.$page_query_string);
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
		
		$this->data['selected_page'] = 'stakeholder';
		$this->load->view('admin/stakeholder', $this->data);
	}
	
	public function update()
	{
		$id = $this->input->get_post('id');

		// Set the validation rules
		$this->form_validation->set_rules('firstname', 'First Name', 'required|trim');

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
            $upload_path = './uploads/stakeholders/';
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
                    $this->stakeholder_model->update($id,['image'=>'']);
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

            $get_post['dob'] = $get_post['dob'] ? date('Y-m-d',strtotime($get_post['dob'])) :'';
            $get_post['fullname'] = $get_post['firstname'].' '.$get_post['lastname'];

            unset($get_post['id']);
            unset($get_post['oldfile']);
            unset($get_post['delete_old_file']);

            if($id > 0) // update
            {
                if($this->stakeholder_model->update($id,$get_post))
                {
                    $_SESSION['msg_success'][] = 'Data Updated...';

                    redirect('admin/stakeholder/');
                }
            }
            else // insert
            {
                if($this->stakeholder_model->insert($get_post))
                {
                    $_SESSION['msg_success'][] = 'Record added successfully...';
                    redirect('admin/stakeholder/');
                }
            }

		}

		if($id > 0)
		$this->data['update_data'] = $this->stakeholder_model->get_stakeholder_by_id($id);
		
		$this->data['selected_page'] = 'stakeholder';
		$this->load->view('admin/stakeholder_update', $this->data);
	}

    public function profile()
    {
        $id = $this->input->get_post('id');

        // Set the validation rules
        $this->form_validation->set_rules('user_id', 'User', 'trim');

        // If the validation worked
        if ($this->form_validation->run())
        {
            $get_post = $this->input->get_post(null,true);

            $get_post['planned_engagement'] = (is_array($this->input->get_post('planned_engagement')) and  count($this->input->get_post('planned_engagement'))) ? implode(',',$this->input->get_post('planned_engagement')) : '';
            $get_post['ongoing_engagement'] = (is_array($this->input->get_post('ongoing_engagement')) and  count($this->input->get_post('ongoing_engagement'))) ? implode(',',$this->input->get_post('ongoing_engagement')) : '';

            unset($get_post['id']);

            $get_post['stakeholder_id'] = $id;
            if($this->stakeholder_model->update_profile($id,$get_post))
            {
                $_SESSION['msg_success'][] = 'Data Updated...';

                redirect('admin/stakeholder/');
            }
        }

        if($id > 0)
            $this->data['update_data'] = $this->stakeholder_model->get_stakeholder_profile_by_id($id);

        $this->data['stakeholder_id'] = $id;
        $this->data['selected_page'] = 'stakeholder';
        $this->load->view('admin/stakeholder_profile', $this->data);
    }
	
	public function delete()
	{
		$delete_id = $this->uri->segment(4) ? $this->uri->segment(4) : $this->input->get_post('delete_id');
		
		$this->stakeholder_model->delete($delete_id);
		$_SESSION['msg_error'][] = 'Record deleted successfully!';
		redirect('admin/stakeholder/');
	}

    public function search()
    {
        $tags = [];
        $keyword = $this->input->get_post('keyword');
        $query_params['offset'] = 0;
        $query_params['limit'] = 10;
        $query_params['keyword'] = $keyword;

        # get rows
        $this->db->like('fullname', $query_params['keyword']);
        $this->db->limit($query_params['limit'], $query_params['offset']);
        $query = $this->db->get('stakeholders');
        //my_var_dump($this->db->last_query());
        foreach($query->result() as $row)
        {
            $tags[] = ['value' => $row->stakeholder_id, 'text' => $row->fullname];
        }

        echo json_encode($tags);
    }

    public function import_csv()
    {
        // Find and Replace a Line Break
        // http://blog.contextures.com/archives/2013/05/28/find-and-replace-line-breaks-in-excel/
        // Remove semi column `;` from csv data

        $table = "stakeholders";
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

            unset($csv_data['request_to']);
            unset($csv_data['status']);
            $this->db->insert($table,$csv_data);
            $id = $this->db->insert_id();
            my_var_dump($this->db->last_query());
            //my_var_dump($id);
        }
    }

    public function import_csv2()
    {
        // Find and Replace a Line Break
        // http://blog.contextures.com/archives/2013/05/28/find-and-replace-line-breaks-in-excel/
        // Remove semi column `;` from csv data

        $table = "stakeholders_point_of_contacts";
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

