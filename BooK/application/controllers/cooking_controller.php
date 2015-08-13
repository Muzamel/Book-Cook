<?php error_reporting(E_ALL); ini_set('display_errors', 1);




class cooking_controller extends CI_Controller{


    private $_cooking_model;
    
    public function __construct(){


        parent::__construct();
//        $this->load->model('cooking_model');
        $this->_cooking_model = new cooking_model();
        $this->name= $this->session->userdata('name');
        $this->FirstName= $this->session->userdata('firstName');
    }
    public function index(){
        $this->load->view("cooking/index");
   }
    public function customize(){
        
        $data['result']=$this->_cooking_model->get_restaurants();
        $this->load->view("cooking/book_table",$data);
   }
       public function cook_as_u_want(){
        $data['result']=$this->_cooking_model->get_restaurants();
        $this->load->view("cooking/new_recipe",$data);
   }
    public function get_restaurant(){
//        extract($_POST);
        $data['result']=$this->_cooking_model->get_restaurants();
        $this->load->view('cooking/book_table',$data);
        $this->load->view("cooking/book_table");
    }
    public function get_recipe($id=1){
        extract($_POST);
        $result = $this->_cooking_model->get_recipies($id);
        
 
        echo json_encode(array('data' => $result));
        exit;
    }
    
    
    public function get_ingredients(){
        extract($_POST);
        $id = $this->uri->segment(3);
        $result = $this->_cooking_model->get_ingredients($id);
        //print_r($result);
        //exit;
        
        echo json_encode(array('data' => $result));
        exit;
    }

    function get_procedures(){
         //extract($_POST);
        $ing_id = $this->uri->segment(3);
        $result = $this->_cooking_model->get_procedures($ing_id);
        //print_r($result);
        //exit;
        
        echo json_encode(array('data' => $result));
        exit;
        
    }
    
    public function view()
    {

        $data['result']=$this->Books_model->get_restaurants();
        $this->load->view('restaurants/booking',$data);
    }
    
}
    
   
