<?php error_reporting(E_ALL); ini_set('display_errors', 1);

class BulkRecipe_Controller extends CI_Controller{

        private $bulk_recipe;

    public function __construct(){


        parent::__construct();

        $this->bulk_recipe = new Bulk_Recipeis_model();

        $this->name = $this->session->userdata('name');
        $this->FirstName = $this->session->userdata('firstName');
        $this->userId = $this->session->userdata('userID');

        if ($this->session->userdata('userID')) {

        } else {
            redirect(base_url() . 'index.php/login');
        }

    }

    public function index($id,$user,$recipies,$quantity,$date,$time,$totalbill){
        $this->bulk_recipe($id);
        $this->get_insert_order();

    }

    public function bulk_recipe($id){

        $data['result']=$this->bulk_recipe->get_bulk_recipies($id);

        $this->load->view('bulk_delivery/bulk_recipe',$data);




}

    public function get_insert_order(){
        $user=  $this->userId;
        $recipies =$this->input->post('bulk_delivery');
         $quantity=$this->input->post('quantity');
         $date = $this->input->post('date');
         $time = $this->input->post('time');
         $totalbill=$this->input->post('bill');
         $this->bulk_recipe->insert_order($user ,$recipies,$quantity,$date,$time,$totalbill);
         redirect('BulkRecipe_Controller');

   }




















}