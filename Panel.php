<?php 
	class Panel  extends CI_Controller {
	
		  function __construct() { 
			 parent::__construct();
			 
			 $this->load->helper('url'); 
			 $this->load->database(); 
			  $this->load->helper('form'); 
			 $this->load->library('session');
			 $this->load->model("main_model");
		  } 
		  public function index()
		  {
				$this->load->view('view' );
				
				 $data['dealers']=$this->main_model->dealers();
		  }
		  
		  public function edit_data()
		  {
			  $data=array(
					'data'=>$this->input->post('data'),
				);
				$this->main_model->edit($id, $data);
		  }
		  
		  public function add_data()
		  {
			  $data=array(
					'data'=>$this->input->post('data'),
				);
				$this->main_model->add($id, $data);
		  }
		  
		   public function delete_data($id)
		  {
				$this->main_model->delete($id);
		  }
	}	
?>