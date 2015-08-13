<?php error_reporting(E_ALL); ini_set('display_errors', 1);

class Bulk_Controller extends CI_Controller{


 private $bulk;
    public function __construct(){
        parent::__construct();

        $this->bulk = new Bulk_model();

    }
    public function index(){

//        $this->load->view('bulk_delivery/bulk_food');
//        $this->load->bulk_rest_name();
    }

    public function bulk_rest_name(){

        $data['result']=$this->bulk->get_bulk_restaurants();
       $this->load->view('bulk_delivery/bulk_food',$data);



    }


}