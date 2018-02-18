<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ico extends CI_Controller {
	
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
		
		$this->data['selected_page'] = 'ico';
		$this->load->view('admin/ico', $this->data);
	}
	
	public function update()
	{
		$id = $this->input->get_post('id');

		// Set the validation rules
		$this->form_validation->set_rules('ico', 'ICO', 'required|trim');

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
            $upload_path = './uploads/icos/';
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
                    $this->ico_model->update($id,['image'=>'']);
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

			if($get_post['ico'] != '' and $this->ico_model->ico_already_exists($get_post['ico'], $id))
			{
				$_SESSION['msg_error'][] = 'ICO already exist...';
			}
			else
			{
				unset($get_post['id']);
                unset($get_post['oldfile']);
                unset($get_post['delete_old_file']);

                if(isset($get_post['start_date']) and $get_post['start_date'])
                {
                    $get_post['start_date'] = date('Y-m-d',strtotime($get_post['start_date']));
                }
                if(isset($get_post['end_date']) and $get_post['end_date'])
                {
                    $get_post['end_date'] = date('Y-m-d',strtotime($get_post['end_date']));
                }

				if($id > 0) // update
                {
                    if($this->ico_model->update($id,$get_post))
                    {
                        $_SESSION['msg_success'][] = 'Data Updated...';

                        redirect('admin/ico/');
                    }
                }
                else // insert
                {
                    if($this->ico_model->insert($get_post))
                    {
                        $_SESSION['msg_success'][] = 'Record added successfully...';
                        redirect('admin/ico/');
                    }
                }
			}
		}

		if($id > 0)
		$this->data['update_data'] = $this->ico_model->get_ico_by_id($id);
		
		$this->data['selected_page'] = 'ico';
		$this->load->view('admin/ico_update', $this->data);
	}
	
	public function delete()
	{
		$delete_id = $this->uri->segment(4) ? $this->uri->segment(4) : $this->input->get_post('delete_id');
		
		$this->ico_model->delete($delete_id);
		$_SESSION['msg_error'][] = 'Record deleted successfully!';
		redirect('admin/ico/');
	}

    public function change_status()
    {
        $id = $this->input->get_post('id');
        $status = $this->input->get_post('status');

        $this->ico_model->update($id,['status'=>$status]);

        my_var_dump($this->db->last_query());
    }
}
