<?php
class Organization_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function get($params = [], $count_result = false)
	{
		if(isset($params['select'])) { $this->db->select($params['select']); }
		if(isset($params['where_in'])) { $this->db->where_in('organization_id',$params['where_in']); }
		if(isset($params['where_not_in'])) { $this->db->where_not_in('organization_id',$params['where_not_in']); }

		if(isset($params['keyword']) and $params['keyword']!='')
		{
			$this->db->like('organization', $params['keyword']);
		}
		
		# If true, count results and return it
		if($count_result)
		{
			$this->db->from('organizations');
			$count = $this->db->count_all_results();
			return $count;
		}
		
		if(isset($params['limit'])) { $this->db->limit($params['limit'], $params['offset']); }
		if(isset($params['order_by'])){ $this->db->order_by($params['order_by'],$params['direction']); }
		
		$query = $this->db->get('organizations');
		//my_var_dump($this->db->last_query());
		return $query;
		
	}
	
	public function insert($data)
	{
        $data['date_created'] = date('Y-m-d H:i:s');
        $data['date_updated'] = date('Y-m-d H:i:s');

        //my_var_dump($data);

        $groups = [];
        if(isset($data['groups']))
        {
            $groups = $data['groups'];
            unset($data['groups']);
        }

		if($this->db->insert('organizations', $data))
		{
            //my_var_dump($this->db->last_query());
			$id =  $this->db->insert_id();

            foreach($groups as $group_id)
            {
                $insert_query = $this->db->insert_string('organizations_groups', ['organization_id' => $id, 'group_id' => $group_id]);
                $insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
                $this->db->query($insert_query);
                //my_var_dump($this->db->last_query());
            }

            return $id;
		}
		return false;
	}

	public function update($id,$data)
	{
        $groups = [];
        if(isset($data['groups']))
        {
            $this->db->delete('organizations_groups', ['organization_id' => $id]);

            $groups = $data['groups'];
            unset($data['groups']);
        }

        foreach($groups as $group_id)
        {
            $insert_query = $this->db->insert_string('organizations_groups', ['organization_id' => $id, 'group_id' => $group_id]);
            $insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
            $this->db->query($insert_query);
        }

        $data['date_updated'] = date('Y-m-d H:i:s');

		$this->db->where('organization_id', $id);
		return $this->db->update('organizations',$data);
		//my_var_dump($this->db->last_query());
	}
	
	public function delete($id)
	{
        $entity = self::get_organization_by_id($id);
        if($entity->image != '')
        {
            $upload_path = './uploads/organizations/';
            delete_file($upload_path.$entity->image);
            $_SESSION['msg_error'][] = $entity->image.' file deleted!';
        }
		return $this->db->delete('organizations', ['organization_id' => $id]);
	}

	public function get_organization_by_id($id)
	{
        # Fetch related data to this entity
        $query = $this->db->get_where('view_organizations_groups',['organization_id'=>$id]);
        $groups = [];
        foreach($query->result() as $row)
        {
            $groups[] = $row;
        }

		$query = $this->db->get_where('organizations',['organization_id'=>$id]);
        if($query->num_rows())
        {
            $row = $query->row();
            $row->groups = $groups;
            $row->image_url = $row->image ? base_url().'uploads/organizations/'.$row->image : '';
            return $row;
        }
		return false;
	}

	public function organization_already_exists($organization, $id=false)
	{
		if($id > 0) $this->db->where('organization_id !=',$id);
		$query = $this->db->get_where('organizations',['organization'=>$organization]);
		return $query->num_rows() ? $query->row() : false;
	}
}


