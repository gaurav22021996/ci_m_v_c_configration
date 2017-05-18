<?php 
   class Main_model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function selecct_where_limit()
	  { 
			 $name=$this -> db
			   -> select('name')
				-> where(array('name'=> $user, 'password'=>$pass))
			   -> limit(1)
			   -> get('admin')
			   -> result_array()[0]['name'];
			   return $name;
	  }
	  public function select()
	  {
		  $query = $this->db->get("dealer"); 
			return $data['records'] = $query->result();
	  }
	  
	   public function edit($id, $data)
	  {
			$this->db->set($data); 
			$this->db->where("id", $id); 
			$this->db->update("dealer", $data);
	  }
	  
	  public function add($data)
	  {
		  $this->db->insert("dealer", $data);
	  }
	  public function delet($id)
	  {
		  $this->db->delete("dealer", "id = $id");
	  }
	  
	      public function count_data()
	  {
		  $query= $this->db->select("count(*) as no")
			->from('feedback')
			->get();
			return  $query->result();
	  }
	  
	  	  	public function join_data($id)
	  {
		   $this->db->select('cp.name name, cp.id id, cp.mobile mobile, d.name department, d.id department_id');
			$this->db->from('contact_person cp');
			$this->db->join('department d', 'cp.department=d.id'); 
			$this->db->where("cp.id", $id);
			$query = $this->db->get();
			return $query->result();
	  }
	  
   }
   
?>