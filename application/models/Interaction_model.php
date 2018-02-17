<?php
class Interaction_model extends CI_Model
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
            $interactions_ids_by_user_id = $this->get_interactions_ids_by_user_id($params['user_id']);
            if(count($interactions_ids_by_user_id))
            {
                $where_in_ids = array_merge($where_in_ids,$interactions_ids_by_user_id);
            }
        }
        if(isset($params['dept_id']))
        {
            $where_in_ids[] = 0;
            $interactions_ids_by_dept_id = $this->get_interactions_ids_by_dept_id($params['dept_id']);
            if(count($interactions_ids_by_dept_id))
            {
                $where_in_ids = array_merge($where_in_ids,$interactions_ids_by_dept_id);
            }
        }
        if(isset($params['stakeholder_id']))
        {
            $where_in_ids[] = 0;
            $interactions_ids_by_stakeholder_id = $this->get_interactions_ids_by_stakeholder_id($params['stakeholder_id']);
            if(count($interactions_ids_by_stakeholder_id))
            {
                $where_in_ids = array_merge($where_in_ids,$interactions_ids_by_stakeholder_id);
            }
        }
        if(isset($params['keyword']) and $params['keyword']!='')
        {
            $where_in_ids[] = 0;
            $interactions_ids_by_stakeholder_name = $this->get_interactions_ids_by_stakeholder_name($params['keyword']);
            if(count($interactions_ids_by_stakeholder_name))
            {
                $where_in_ids = array_merge($where_in_ids,$interactions_ids_by_stakeholder_name);
            }
        }
        if(isset($params['keyword']) and $params['keyword']!='')
        {
            $where_in_ids[] = 0;
            $interactions_ids_by_user_name = $this->get_interactions_ids_by_user_name($params['keyword']);
            if(count($interactions_ids_by_user_name))
            {
                $where_in_ids = array_merge($where_in_ids,$interactions_ids_by_user_name);
            }
        }

        if(count($where_in_ids)) { $this->db->where_in('interaction_id',$where_in_ids); }

        if(isset($params['select'])) { $this->db->select($params['select']); }
        if(isset($params['interaction_id'])) { $this->db->where('interaction_id',$params['interaction_id']); }
		if(isset($params['where_in'])) { $this->db->where_in('interaction_id',$params['where_in']); }
		if(isset($params['where_not_in'])) { $this->db->where_not_in('interaction_id',$params['where_not_in']); }

		if(isset($params['keyword']) and $params['keyword']!='')
		{
            //$this->db->group_start();
			$this->db->or_like('discussion', $params['keyword']);
            $this->db->or_like('department', $params['keyword']);
            //$this->db->group_end();
		}
		
		# If true, count results and return it
		if($count_result)
		{
			$this->db->from('view_interactions');
			$count = $this->db->count_all_results();
			return $count;
		}
		
		if(isset($params['limit'])) { $this->db->limit($params['limit'], $params['offset']); }
		if(isset($params['order_by'])){ $this->db->order_by($params['order_by'],$params['direction']); }
		
		$query = $this->db->get('view_interactions');
		//my_var_dump($this->db->last_query());
		return $query;
		
	}
	
	public function insert($data)
	{
	    if( ! isset($data['date_created']))
        {
            $data['date_created'] = date('Y-m-d H:i:s');
        }
        $data['date_updated'] = date('Y-m-d H:i:s');

		if($this->db->insert('interactions', $data))
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

		$this->db->where('interaction_id', $id);
		return $this->db->update('interactions',$data);
		//my_var_dump($this->db->last_query());
	}
	
	public function delete($id)
	{
        self::delete_interaction_assets($id);

		return $this->db->delete('interactions', ['interaction_id' => $id]);
	}

	public function get_interaction_by_id($id)
	{
		$query = $this->db->get_where('view_interactions',['interaction_id'=>$id]);
        if($query->num_rows())
        {
            $row = $query->row();
            $row->assets = self::get_interaction_assets($id);
            $row->referrals = self::get_interaction_referrals($id);
            $row->stakeholders = self::get_interaction_stakeholders($id);
            $row->users = self::get_interaction_users($id);
            return $row;
        }
		return false;
	}

    public function get_asset_by_id($id)
    {
        $query = $this->db->get_where('interactions_assets',['asset_id'=>$id]);
        if($query->num_rows())
        {
            $row = $query->row();
            return $row;
        }
        return false;
    }

	public function interaction_already_exists($interaction, $id=false)
	{
		if($id > 0) $this->db->where('interaction_id !=',$id);
		$query = $this->db->get_where('interactions',['interaction'=>$interaction]);
		return $query->num_rows() ? $query->row() : false;
	}

    public function delete_asset($asset_id)
    {
        $entity = self::get_asset_by_id($asset_id);
        if($entity)
        {
            $upload_path = './uploads/interactions/';
            delete_file($upload_path.$entity->file_name);
            $_SESSION['msg_error'][] = $entity->file_name.' file deleted!';
        }
        return $this->db->delete('interactions_assets', ['asset_id' => $asset_id]);
    }

    public function delete_interaction_assets($id)
    {
        $assets = self::get_interaction_assets($id);
        foreach ($assets as $entity)
        {
            $upload_path = './uploads/interactions/';
            delete_file($upload_path.$entity->file_name);
            $_SESSION['msg_error'][] = $entity->file_name.' file deleted!';
        }
        return $this->db->delete('interactions_assets', ['interaction_id' => $id]);
    }

    public function update_interaction_assets($id)
    {
        //my_var_dump($_FILES);
        # File uploading configuration
        $upload_path = './uploads/interactions/';
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        # Multiple file uploading process start from here
        $files = $_FILES;
        //my_var_dump($_FILES);
        $cpt = count($_FILES['assets']['name']);
        for($i=0; $i<$cpt; $i++)
        {
            $_FILES['assets']['name']= $files['assets']['name'][$i];
            $_FILES['assets']['type']= $files['assets']['type'][$i];
            $_FILES['assets']['tmp_name']= $files['assets']['tmp_name'][$i];
            $_FILES['assets']['error']= $files['assets']['error'][$i];
            $_FILES['assets']['size']= $files['assets']['size'][$i];

            $uploaded_file_array = (isset($_FILES['assets']) and $_FILES['assets']['size'] > 0 and $_FILES['assets']['error'] == 0) ? $_FILES['assets'] : '';

            if( is_array($uploaded_file_array) )
            {
                if($this->upload->do_upload('assets'))
                {
                    $upload_detail = $this->upload->data();
                    //my_var_dump($upload_detail);

                    $data['interaction_id'] = $id;
                    $data['asset'] = $upload_detail['orig_name'];
                    $data['file_name'] = $upload_detail['file_name'];
                    $data['date_created'] = date('Y-m-d H:i:s');
                    $data['date_updated'] = date('Y-m-d H:i:s');
                    $this->db->insert('interactions_assets',$data);
                }
                else
                {
                    $uploading_error = $this->upload->display_errors();
                    $_SESSION['msg_error'][] = $uploading_error;
                    //my_var_dump($uploading_error);
                }
            }

        }

    }

    public function update_interaction_referrals($id,$data)
    {
        # delete previous record only if new rows provided
        if(is_array($data) and count($data))
        {
            $this->db->delete('interactions_referrals', ['interaction_id' => $id]);

            foreach ($data as $key_id)
            {
                $this->db->insert('interactions_referrals',['interaction_id'=>$id,'user_id'=>$key_id]);
            }
        }
    }

    public function update_interaction_stakeholders($id,$data)
    {
        # delete previous record only if new rows provided
        if(is_array($data) and count($data))
        {
            $this->db->delete('interactions_stakeholders', ['interaction_id' => $id]);

            foreach ($data as $key_id)
            {
                $this->db->insert('interactions_stakeholders',['interaction_id'=>$id,'stakeholder_id'=>$key_id]);
            }
        }
    }

    public function update_interaction_users($id,$data)
    {
        # delete previous record only if new rows provided
        if(is_array($data) and count($data))
        {
            $this->db->delete('interactions_users', ['interaction_id' => $id]);

            foreach ($data as $key_id)
            {
                $this->db->insert('interactions_users',['interaction_id'=>$id,'user_id'=>$key_id]);
            }
        }
    }

    public function get_interaction_assets($id)
    {
        $this->db->where('interaction_id',$id);
        $query = $this->db->get('interactions_assets');

        $return = [];
        foreach ($query->result() as $row)
        {
            $row->file_url = $row->file_name ? base_url().'uploads/interactions/'.$row->file_name : '';
            $return[] = $row;
        }

        return $return;
    }

    public function get_interaction_referrals($id)
    {
        $this->db->where('interaction_id',$id);
        $query = $this->db->get('view_interactions_referrals');

        $return = [];
        foreach ($query->result() as $row)
        {
            $row->image_url = $row->image ? base_url().'uploads/users/'.$row->image : '';
            $return[] = $row;
        }

        return $return;
    }

    public function get_interaction_stakeholders($id)
    {
        $this->db->where('interaction_id',$id);
        $query = $this->db->get('view_interactions_stakeholders');

        $return = [];
        foreach ($query->result() as $row)
        {
            $row->image_url = $row->image ? base_url().'uploads/users/'.$row->image : '';
            $return[] = $row;
        }

        return $return;
    }

    public function get_interaction_users($id)
    {
        $this->db->where('interaction_id',$id);
        $query = $this->db->get('view_interactions_users');

        $return = [];
        foreach ($query->result() as $row)
        {
            $row->image_url = $row->image ? base_url().'uploads/users/'.$row->image : '';
            $return[] = $row;
        }

        return $return;
    }

    public function get_interactions_ids_by_stakeholder_id($stakeholder_id)
    {
        $ids = [];
        $this->db->select('interaction_id');
        $this->db->where('stakeholder_id',$stakeholder_id);
        $query = $this->db->get('interactions_stakeholders');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->interaction_id;
        }

        return $ids;
    }

    public function get_interactions_ids_by_user_id($user_id)
    {
        $ids = [];
        $this->db->select('interaction_id');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('interactions_users');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->interaction_id;
        }

        $this->db->select('interaction_id');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('interactions_referrals');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->interaction_id;
        }

        return $ids;
    }

    public function get_interactions_ids_by_dept_id($dept_id)
    {
        $ids = [];
        $this->db->select('interaction_id');
        $this->db->where('dept_id',$dept_id);
        $query = $this->db->get('interactions');
        foreach ($query->result() as $row)
        {
            $ids[] = $row->interaction_id;
        }

        return $ids;
    }

    public function get_interactions_ids_by_stakeholder_name($name)
    {
        $ids = [];
        $this->db->select('interaction_id');
        $this->db->like('fullname', $name);
        $query = $this->db->get('view_interactions_stakeholders');
        //my_var_dump($this->db->last_query());
        foreach ($query->result() as $row)
        {
            $ids[] = $row->interaction_id;
        }

        return $ids;
    }

    public function get_interactions_ids_by_user_name($name)
    {
        $ids = [];
        $this->db->select('interaction_id');
        $this->db->like('fullname', $name);
        $this->db->or_like('initial', $name);
        $query = $this->db->get('view_interactions_users');
        //my_var_dump($this->db->last_query());
        foreach ($query->result() as $row)
        {
            $ids[] = $row->interaction_id;
        }

        return $ids;
    }
}


