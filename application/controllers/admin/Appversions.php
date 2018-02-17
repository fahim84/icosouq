<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appversions extends CI_Controller {

    var $data;
	public function __construct() {
        parent::__construct();

        # if user is not logged in, then redirect him to login page
        if(! isset($_SESSION['user']->user_id) )
        {
            $_SESSION['redirect_to_last_url'] = current_url();
            redirect(base_url().'admin/login/','location');
        }
    }

    public function index() {

        $order_by = $this->input->get_post('order_by') ? $this->input->get_post('order_by') : 'department';
        $direction = $this->input->get_post('direction') ? $this->input->get_post('direction') : 'ASC';

        $keyword = $this->input->get_post('keyword');

        $this->db->select("*, (SELECT COUNT(*) FROM users_devices WHERE version=settings.version_number) AS device_count");
        $query = $this->db->get_where('settings');
        $version = $query->result();
        //my_var_dump($this->db->last_query());

        $this->data['keyword'] = $keyword;
        $this->data['order_by'] = $order_by;
        $this->data['direction'] = $direction;

        $this->data['contentdata'] = $version;
        $this->data['selected_page'] = 'version';
        $this->load->view('admin/versions', $this->data);
    }

    public function addedit($id) {
        $id = intval($id);

        if($id > 0) {
            $rs = $this->db->get_where('settings',array('autoId'=>$id));
            $result = $rs->row();
            $this->data['version'] = $result;
        } else {

        }
        $this->data['selected_page'] = 'version';
        $this->load->view('admin/addeditversion', $this->data);
    }

    public function save()
    {
        $post = $this->input->post();

        if(isset($post['id'])) {
            $data['version_number'] = $post['version_number'];
            $data['file_name'] = $post['file_name'];
            $data['file_link'] = $post['file_link'];
            $data['file_link2'] = $post['file_link2'];
            $date_created = DateTime::CreateFromFormat("m/d/Y", $post['date_created']);
            $data['date_created'] = $date_created->format('Y-m-d');
            //$data['status'] = $post['status'];
            if($post['id'] == 0) {
                $this->db->insert('settings',$data);
            } else {
                $this->db->where('autoId',$post['id']);
                $this->db->update('settings',$data);
            }

            //my_var_dump($post);
            //my_var_dump($this->db->last_query());
        }

        redirect("admin/appversions/index");
    }

    public function delete($id)
    {
        $this->db->where('autoId',$id);
        $this->db->delete('settings');
        redirect( "admin/appversions/index");
    }

    public function toggleactive($id,$active) {

        if(!$active) // disable all records
        {
            $query = $this->db->get_where('settings',['autoId !='=>$id]);
            foreach($query->result() as $row)
            {
                $sql = "UPDATE settings SET total_users=(SELECT COUNT(*) FROM users_devices WHERE version=settings.version_number) WHERE autoId=$row->autoId";
                $this->db->query($sql);
            }
            $this->db->update('settings',array('status'=>0));
        }
        $active = !$active;
        $this->db->where('autoId',$id);
        $this->db->update('settings',array('status'=>$active));
        /*my_var_dump($id);
        my_var_dump($active);
        my_var_dump($_REQUEST);*/
        redirect("admin/appversions");
    }
}
