<?php
class Ico_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function get($params = [], $count_result = false)
	{
		if(isset($params['select'])) { $this->db->select($params['select']); }
		if(isset($params['where_in'])) { $this->db->where_in('ico_id',$params['where_in']); }
		if(isset($params['where_not_in'])) { $this->db->where_not_in('ico_id',$params['where_not_in']); }

		if(isset($params['keyword']) and $params['keyword']!='')
		{
			$this->db->like('ico', $params['keyword']);
		}
		
		# If true, count results and return it
		if($count_result)
		{
			$this->db->from('icos');
			$count = $this->db->count_all_results();
			return $count;
		}
		
		if(isset($params['limit'])) { $this->db->limit($params['limit'], $params['offset']); }
		if(isset($params['order_by'])){ $this->db->order_by($params['order_by'],$params['direction']); }
		
		$query = $this->db->get('icos');
		//my_var_dump($this->db->last_query());
		return $query;
		
	}
	
	public function insert($data)
	{
        $data['date_created'] = date('Y-m-d H:i:s');
        $data['date_updated'] = date('Y-m-d H:i:s');

		if($this->db->insert('icos', $data))
		{
            //my_var_dump($this->db->last_query());
			$id =  $this->db->insert_id();

            return $id;
		}
		return false;
	}

	public function update($id,$data)
	{
        $data['date_updated'] = date('Y-m-d H:i:s');

		$this->db->where('ico_id', $id);
		return $this->db->update('icos',$data);
		//my_var_dump($this->db->last_query());
	}
	
	public function delete($id)
	{
        $entity = self::get_ico_by_id($id);
        if($entity->image != '')
        {
            $upload_path = './uploads/icos/';
            delete_file($upload_path.$entity->image);
            $_SESSION['msg_error'][] = $entity->image.' file deleted!';
        }
		return $this->db->delete('icos', ['ico_id' => $id]);
	}

	public function get_ico_by_id($id)
	{
		$query = $this->db->get_where('icos',['ico_id'=>$id]);
        if($query->num_rows())
        {
            $row = $query->row();
            $row->image_url = $row->image ? base_url().'uploads/icos/'.$row->image : '';
            return $row;
        }
		return false;
	}

	public function ico_already_exists($ico, $id=false)
	{
		if($id > 0) $this->db->where('ico_id !=',$id);
		$query = $this->db->get_where('icos',['ico'=>$ico]);
		return $query->num_rows() ? $query->row() : false;
	}
}


