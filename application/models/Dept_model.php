<?php
class Dept_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function get($params = [], $count_result = false)
	{
		if(isset($params['select'])) { $this->db->select($params['select']); }
        if(isset($params['dept_id'])) { $this->db->where('dept_id',$params['dept_id']); }
		if(isset($params['where_in'])) { $this->db->where_in('dept_id',$params['where_in']); }
		if(isset($params['where_not_in'])) { $this->db->where_not_in('dept_id',$params['where_not_in']); }

		if(isset($params['keyword']) and $params['keyword']!='')
		{
			$this->db->like('department', $params['keyword']);
		}
		
		# If true, count results and return it
		if($count_result)
		{
			$this->db->from('view_departments');
			$count = $this->db->count_all_results();
			return $count;
		}
		
		if(isset($params['limit'])) { $this->db->limit($params['limit'], $params['offset']); }
		if(isset($params['order_by'])){ $this->db->order_by($params['order_by'],$params['direction']); }
		
		$query = $this->db->get('view_departments');
		//my_var_dump($this->db->last_query());
		return $query;
		
	}
	
	public function insert($data)
	{
		if($this->db->insert('departments', $data))
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
		$this->db->where('dept_id', $id);
		return $this->db->update('departments',$data);
		//my_var_dump($this->db->last_query());
	}
	
	public function delete($id)
	{
        $entity = self::get_department_by_id($id);
        if($entity->image != '')
        {
            $upload_path = './uploads/departments/';
            delete_file($upload_path.$entity->image);
            $_SESSION['msg_error'][] = $entity->image.' file deleted!';
        }
		return $this->db->delete('departments', ['dept_id' => $id]);
	}

	public function get_department_by_id($id)
	{
		$query = $this->db->get_where('departments',['dept_id'=>$id]);
        if($query->num_rows())
        {
            $row = $query->row();
            $row->image_url = $row->image ? base_url().'uploads/departments/'.$row->image : '';
            return $row;
        }
		return false;
	}

	public function department_already_exists($department, $id=false)
	{
		if($id > 0) $this->db->where('dept_id !=',$id);
		$query = $this->db->get_where('departments',['department'=>$department]);
		return $query->num_rows() ? $query->row() : false;
	}
}


