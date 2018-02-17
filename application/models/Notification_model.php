<?php
class Notification_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function get($params = array(), $count_result = false)
	{
		if(isset($params['to_user_id'])) { $this->db->where('to_user_id', $params['to_user_id']); }
		if(isset($params['is_read'])) { $this->db->where('is_read', $params['is_read']); }

		if(isset($params['group_by'])) { $this->db->group_by($params['group_by']); }

		# If true, count results and return it
		if($count_result)
		{
			$this->db->from('notifications');
			$count = $this->db->count_all_results();
			return $count;
		}
		
		if(isset($params['limit'])) { $this->db->limit($params['limit'], $params['offset']); }
		if(isset($params['order_by'])){ $this->db->order_by($params['order_by'],$params['direction']); }
		
		$query = $this->db->get('view_notifications');
		//my_var_dump($this->db->last_query());
		return $query;
		
	}

	public function insert($data)
	{
        $data['date_created'] = date('Y-m-d H:i:s');
        $data['date_updated'] = date('Y-m-d H:i:s');

		if($this->db->insert('notifications', $data))
		{
			$id = $this->db->insert_id();

			return $id;
		}
		return false;
	}
	
	public function update($id,$data)
	{
        $data['date_updated'] = date('Y-m-d H:i:s');
		$this->db->where('notification_id', $id);
		return $this->db->update('notifications',$data);
	}
	
	public function delete($id)
	{
		return $this->db->delete('notifications', array('notification_id' => $id));
	}

	public function get_notification_by_id($id)
	{
		$query = $this->db->get_where('view_notifications',array('notification_id'=>$id));
		if($query->num_rows())
        {
            $row = $query->row();
            $row->logged_in_user_image_url = $row->logged_in_user_image ? base_url().'uploads/users/'.$row->logged_in_user_image : '';
            return $row;
        }
		return false;
	}
}


