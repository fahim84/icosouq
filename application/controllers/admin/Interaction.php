<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Interaction extends CI_Controller {

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
        $order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'date_created';
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

        $total_rows = $this->interaction_model->get($query_params,true);
        $rows = $this->interaction_model->get($query_params);

        # array for pagination query string
        $qstr['order_by'] = $order_by;
        $qstr['direction'] = $direction;
        if($keyword) $qstr['keyword'] = $keyword;

        $page_query_string = '?'.http_build_query($qstr);
        $config['base_url'] = base_url('admin/interaction/index/'.$page_query_string);
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

        $this->data['selected_page'] = 'interaction';
        $this->load->view('admin/interaction', $this->data);
    }

    public function update()
    {
        $id = $this->input->get_post('id');

        // Set the validation rules
        $this->form_validation->set_rules('discussion', 'Discussion', 'required|trim');

        // If the validation worked
        if ($this->form_validation->run())
        {
            $get_post = $this->input->get_post(null,true);

            unset($get_post['referrals']);
            unset($get_post['stakeholders']);
            unset($get_post['users']);
            unset($get_post['id']);

            if($id > 0) // update
            {
                if($this->interaction_model->update($id,$get_post))
                {
                    $_SESSION['msg_success'][] = 'Data Updated...';
                }
            }
            else // insert
            {
                if($id = $this->interaction_model->insert($get_post))
                {
                    $_SESSION['msg_success'][] = 'Record added successfully...';
                }
            }

            # assets
            $this->interaction_model->update_interaction_assets($id);

            # referrals
            $this->interaction_model->update_interaction_referrals($id,$this->input->get_post('referrals'));

            # stakeholders
            $this->interaction_model->update_interaction_stakeholders($id,$this->input->get_post('stakeholders'));

            # users
            $this->interaction_model->update_interaction_users($id,$this->input->get_post('users'));

            redirect('admin/interaction/');

        }

        if($id > 0)
            $this->data['update_data'] = $this->interaction_model->get_interaction_by_id($id);

        $this->data['selected_page'] = 'interaction';
        $this->load->view('admin/interaction_update', $this->data);
    }

    public function delete()
    {
        $delete_id = $this->uri->segment(4) ? $this->uri->segment(4) : $this->input->get_post('delete_id');

        $this->interaction_model->delete($delete_id);
        $_SESSION['msg_error'][] = 'Record deleted successfully!';
        redirect('admin/interaction/');
    }

    public function delete_asset()
    {
        $delete_id = $this->uri->segment(4) ? $this->uri->segment(4) : $this->input->get_post('delete_id');

        $this->interaction_model->delete_asset($delete_id);
    }

}

