<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'libraries/ICObenchAPI.php');
require_once(APPPATH . 'libraries/RSSParser.php');

class Welcome extends CI_Controller {

    var $data;

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
        $api->getICO($this->input->get_post('id'));
        echo '<pre>';
        my_var_dump(json_decode($api->result));
        echo '</pre>';
    }

    public function bth_price()
    {
        //$api_end_point = "https://api.coinbase.com/v2/currencies";
        //$api_end_point = "https://api.coinbase.com/v2/exchange-rates?currency=BTC";
        //$api_end_point = "https://api.coinbase.com/v2/exchange-rates?currency=ETH";
        $api_end_point = "https://api.coinbase.com/v2/exchange-rates?currency=XMR";
        //$api_end_point = "https://api.coinbase.com/v2/prices/spot?currency=USD";
        my_var_dump($api_end_point);
        $response = file_get_contents($api_end_point);
        if($response)
        {
            $response = json_decode($response);
            //my_var_dump($response);

            $datetime = date('Y-m-d H:i:s');
            $sql_data['name'] = $response->data->currency;
            $sql_data['fullname'] = $response->data->currency;
            $sql_data['price'] = $response->data->rates->USD;
            $sql_data['currency'] = 'USD';
            $sql_data['updated_at'] = $datetime;

            $sql = $this->db->insert_string('currencies', $sql_data) . " ON DUPLICATE KEY UPDATE price={$response->data->rates->USD},updated_at='$datetime'";
            $this->db->query($sql);
            my_var_dump($this->db->last_query());
            $id = $this->db->insert_id();
            my_var_dump($id);

        }
        else{
            my_var_dump($response);
        }
    }

    public function news()
    {
        $order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'post_date';
        $direction = $this->input->get_post('direction') ? $this->input->get_post('direction') : 'DESC';

        $keyword = $this->input->get_post('keyword');

        # Pagination Code
        $offset	=	$this->input->get_post('per_page');
        if($offset < 1)
        {
            $offset = 0;
        }

        if ($this->uri->segment(3)) { $limit = $this->uri->segment(3); }else{ $limit = 5; }

        if($keyword != '') $query_params['keyword'] = $keyword;

        $query_params['limit'] = $limit;
        $query_params['offset'] = $offset;
        $query_params['order_by'] = $order_by;
        $query_params['direction'] = $direction;
        $query_params['status'] = 1;

        $total_rows = $this->article_model->get($query_params,true);
        $rows = $this->article_model->get($query_params);

        # array for pagination query string
        $qstr['order_by'] = $order_by;
        $qstr['direction'] = $direction;
        $qstr['status'] = 1;
        if($keyword) $qstr['keyword'] = $keyword;

        $page_query_string = '?'.http_build_query($qstr);
        $config['base_url'] = base_url('welcome/news/'.$page_query_string);
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

        $this->data['selected_page'] = 'news';
        $this->load->view('news',$this->data);
    }
    public function newsdetail()
    {
        $id = $this->input->get_post('id');
        $row = $this->article_model->get_article_by_id($id);
        if(!$row)
        {
            show_404();
        }
        $this->data['row'] = $row;
        $this->load->view('newsdetail',$this->data);
    }

    public function terms_and_condition()
    {
        $this->data['selected_page'] = 'terms_and_condition';

        $this->load->view('terms_and_condition', $this->data);
    }

    public function privacy()
    {
        $this->data['selected_page'] = 'privacy';

        $this->load->view('privacy', $this->data);
    }

    public function contact_us()
    {
        // Set the validation rules
        $this->form_validation->set_rules('fullname', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->form_validation->run())
        {
            $get_post = $this->input->get_post(null,true);

            # File uploading configuration
            $upload_path = './uploads/attachments/';
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = false;
            $config['max_size'] = 51200; //KB

            $this->load->library('upload', $config);

            $uploaded_file = '';
            # Try to upload file now
            if ($this->upload->do_upload('image'))
            {
                # Get uploading detail here
                $upload_detail = $this->upload->data();
                $uploaded_file = $upload_detail['file_name'];
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

            # Send email to Signup User
            $this->email->clear(TRUE);
            $this->email->set_mailtype("html");
            $this->email->from(SYSTEM_EMAIL, SYSTEM_NAME);
            $this->email->reply_to($get_post['email'], $get_post['fullname']);
            $this->email->to("ahmad.hello@gmail.com");
            $this->email->to("ward0044@outlook.com");
            $this->email->to("volcanock@gmail.com");
            $this->email->subject("{$get_post['fullname']} wants to contact you!");
            $this->email->message($get_post['message']);
            if($uploaded_file)
            {
                $this->email->attach($upload_path.$uploaded_file);
            }
            $response = $this->email->send();

            if($response)
            {
                $_SESSION['msg_success'][] = 'Email has been sent.';
            }
            else
            {
                $_SESSION['msg_error'][] = 'Email could not be sent.';
            }
            redirect('welcome/contact_us');
        }

        $this->data['selected_page'] = 'contact_us';

        $this->load->view('contact_us', $this->data);
    }
}
