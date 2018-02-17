<?php
class Stakeholder_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function get($params = [], $count_result = false)
	{
	    $where_in_ids = [];
	    if(isset($params['user_id']))
        {
            $where_in_ids[] = 0;
            $stakeholders_ids_by_user_id = $this->get_stakeholders_ids_by_user_id($params['user_id']);
            if(count($stakeholders_ids_by_user_id))
            {
                $where_in_ids = array_merge($where_in_ids,$stakeholders_ids_by_user_id);
            }
        }
        if(isset($params['dept_id']))
        {
            $where_in_ids[] = 0;
            $stakeholders_ids_by_dept_id = $this->get_stakeholders_ids_by_dept_id($params['dept_id']);
            if(count($stakeholders_ids_by_dept_id))
            {
                $where_in_ids = array_merge($where_in_ids,$stakeholders_ids_by_dept_id);
            }
        }
        if(isset($params['organization_id']))
        {
            $where_in_ids[] = 0;
            $stakeholders_ids_by_organization_id = $this->get_stakeholders_ids_by_organization_id($params['organization_id']);
            if(count($stakeholders_ids_by_organization_id))
            {
                $where_in_ids = array_merge($where_in_ids,$stakeholders_ids_by_organization_id);
            }
        }
        if(isset($params['group_id']))
        {
            $where_in_ids[] = 0;
            $stakeholders_ids_by_group_id = $this->get_stakeholders_ids_by_group_id($params['group_id']);
            if(count($stakeholders_ids_by_group_id))
            {
                $where_in_ids = array_merge($where_in_ids,$stakeholders_ids_by_group_id);
            }
        }
        if(isset($params['interaction_id']))
        {
            $where_in_ids[] = 0;
            $stakeholders_ids_by_interaction_id = $this->get_stakeholders_ids_by_interaction_id($params['interaction_id']);
            if(count($stakeholders_ids_by_interaction_id))
            {
                $where_in_ids = array_merge($where_in_ids,$stakeholders_ids_by_interaction_id);
            }
        }
        if(count($where_in_ids)) { $this->db->where_in('stakeholder_id',$where_in_ids); }

        if(isset($params['select'])) { $this->db->select($params['select']); }
        if(isset($params['where_in'])) { $this->db->where_in('stakeholder_id',$params['where_in']); }
		if(isset($params['where_not_in'])) { $this->db->where_not_in('stakeholder_id',$params['where_not_in']); }
        if(isset($params['is_activated'])) { $this->db->where('is_activated',$params['is_activated']); }

		if(isset($params['keyword']) and $params['keyword']!='')
		{
		    $this->db->group_start();
			$this->db->or_like('fullname', $params['keyword']);
			$this->db->or_like('department', $params['keyword']);
			$this->db->or_like('group', $params['keyword']);
			$this->db->or_like('organization', $params['keyword']);
			$this->db->or_like('creator_name', $params['keyword']);
			$this->db->or_like('creator_initial', $params['keyword']);
			$this->db->or_like('dri_fullname', $params['keyword']);
			$this->db->or_like('dri_initial', $params['keyword']);
            $this->db->group_end();
		}
		
		# If true, count results and return it
		if($count_result)
		{
			$this->db->from('view_stakeholders');
			$count = $this->db->count_all_results();
			return $count;
		}
		
		if(isset($params['limit'])) { $this->db->limit($params['limit'], $params['offset']); }
		if(isset($params['order_by'])){ $this->db->order_by($params['order_by'],$params['direction']); }
		
		$query = $this->db->get('view_stakeholders');
		//my_var_dump($this->db->last_query());
		return $query;
		
	}
	
	public function insert($data)
	{
        $data['date_created'] = date('Y-m-d H:i:s');
        $data['date_updated'] = date('Y-m-d H:i:s');

		if($this->db->insert('stakeholders', $data))
		{
            //my_var_dump($this->db->last_query());
			$id =  $this->db->insert_id();

            return $id;
		}
        //my_var_dump($this->db->last_query());
		return false;
	}

	public function update($id,$data)
	{
        $data['date_updated'] = date('Y-m-d H:i:s');

		$this->db->where('stakeholder_id', $id);
		return $this->db->update('stakeholders',$data);
		//my_var_dump($this->db->last_query());
	}
	
	public function delete($id)
	{
        $entity = self::get_stakeholder_by_id($id);
        if($entity->image != '')
        {
            $upload_path = './uploads/stakeholders/';
            delete_file($upload_path.$entity->image);
            $_SESSION['msg_error'][] = $entity->image.' file deleted!';
        }
		return $this->db->delete('stakeholders', ['stakeholder_id' => $id]);
	}

	public function get_stakeholder_by_id($id)
	{
		$query = $this->db->get_where('view_stakeholders',['stakeholder_id'=>$id]);
        if($query->num_rows())
        {
            $row = $query->row();
            $row->image_url = $row->image ? base_url().'uploads/stakeholders/'.$row->image : '';
            return $row;
        }
		return false;
	}

	public function stakeholder_already_exists($stakeholder, $id=false)
	{
		if($id > 0) $this->db->where('stakeholder_id !=',$id);
		$query = $this->db->get_where('stakeholders',['stakeholder'=>$stakeholder]);
		return $query->num_rows() ? $query->row() : false;
	}

    public function insert_profile($data)
    {
        $this->db->delete('stakeholders_point_of_contacts', ['stakeholder_id' => $data['stakeholder_id']]);

        if($this->db->insert('stakeholders_point_of_contacts', $data))
        {
            return $data['stakeholder_id'];
        }
        //my_var_dump($this->db->last_query());
        return false;
    }

    public function update_profile($id,$data)
    {
        $already_exist = $this->db->get_where('stakeholders_point_of_contacts',['stakeholder_id'=>$id])->num_rows();
        if($already_exist)
        {
            $this->db->where('stakeholder_id', $id);
            $this->db->update('stakeholders_point_of_contacts',$data);
        }
        else
        {
            if($this->db->insert('stakeholders_point_of_contacts', $data))
            {
                return $data['stakeholder_id'];
            }
        }
        return $id;
    }

    public function get_stakeholder_profile_by_id($id)
    {
        $dropdowns = $this->dropdown_model->get_all_as_array();
        $query = $this->db->get_where('view_stakeholders_point_of_contacts',['stakeholder_id'=>$id]);
        if($query->num_rows())
        {
            $row = $query->row();
            $row->dept_image_url = $row->dept_image ? base_url().'uploads/departments/'.$row->dept_image : '';
            $row->attitude_nn_string = $dropdowns['attitude_nn'][$row->attitude_nn];
            $row->comm_focus_string = $dropdowns['comm_focus'][$row->comm_focus];
            $row->priority_string = $dropdowns['priority'][$row->priority];
            if($row->planned_engagement!='')
            {
                $planned_engagement_string_array = [];
                $pl_eng_ids = explode(',',$row->planned_engagement);
                foreach ($pl_eng_ids as $pl_eng_id)
                {
                    $planned_engagement_string_array[] = $dropdowns['planned_engagement'][$pl_eng_id];
                }

                $row->planned_engagement_string = implode(',',$planned_engagement_string_array);
            }

            $row->geo_scope_string = $dropdowns['geo_scope'][$row->geo_scope];
            $row->rx_influence_string = $dropdowns['rx_influence'][$row->rx_influence];
            $row->influence_string = $dropdowns['influence'][$row->influence];
            $row->frequency_string = $dropdowns['frequency'][$row->frequency];
            return $row;
        }
        return false;
    }

    public function get_stakeholders_ids_by_interaction_id($interaction_id)
    {
        $ids = [];
        $this->db->select('stakeholder_id');
        $this->db->where('interaction_id',$interaction_id);
        $query = $this->db->get('interactions_stakeholders');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->stakeholder_id;
        }

        return $ids;
    }

    public function get_stakeholders_ids_by_user_id($user_id)
    {
        $ids = [];
        $this->db->select('stakeholder_id');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('stakeholders_point_of_contacts');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->stakeholder_id;
        }

        $this->db->select('stakeholder_id');
        $this->db->where('dri_user_id',$user_id);
        $query = $this->db->get('stakeholders');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->stakeholder_id;
        }

        return $ids;
    }

    public function get_stakeholders_ids_by_dept_id($dept_id)
    {
        $ids = [];
        $this->db->select('stakeholder_id');
        $this->db->where('dept_id',$dept_id);
        $query = $this->db->get('stakeholders_point_of_contacts');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->stakeholder_id;
        }

        return $ids;
    }

    public function get_stakeholders_ids_by_organization_id($organization_id)
    {
        $ids = [];
        $this->db->select('stakeholder_id');
        $this->db->where('organization_id',$organization_id);
        $query = $this->db->get('stakeholders_point_of_contacts');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->stakeholder_id;
        }

        return $ids;
    }

    public function get_stakeholders_ids_by_group_id($group_id)
    {
        $ids = [];
        $this->db->select('stakeholder_id');
        $this->db->where('group_id',$group_id);
        $query = $this->db->get('stakeholders_point_of_contacts');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->stakeholder_id;
        }

        return $ids;
    }

}


