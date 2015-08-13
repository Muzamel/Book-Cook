<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Admin_panel_controller extends CI_Controller {

    private $_admin_model;

    public function __construct() {

        parent::__construct();
        $this->_admin_model = new Admin_panel_model();
        $this->load->library('grocery_CRUD');
    }

    public function index() {

        $this->load->view('login1');
    }

    public function sign_in() {
        $crud = new grocery_CRUD();
        $crud->set_table('user');
        $crud->set_subject('User');
//        $crud->required_fields('user_name');
        $crud->required_fields('email');



        extract($_POST);

        $result = $this->_admin_model->sign_in_model($email, $password);

        if ($result == TRUE)
            redirect('Admin_panel_controller/home');
        else
            $this->load->view('login1');
    }

    public function home() {

        $this->load->view('home');
    }

    public function reservation() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('reservation');
        
        $crud->display_as('user_id','User Name');
        $crud->display_as('restaurant_id','Restaurant Names');

        $crud->set_subject('reservation');
        
        $crud->set_relation('user_id','user','username');
        $crud->set_relation('restaurant_id','restaurant','restaurant_name');
        $crud->required_fields('people');
        $crud->unset_add();
        $crud->unset_edit_fields('unique_code');

//        $crud->colums('people', 'start_time', 'end_time', 'res_date', 'restaurant_id');
//        $crud->change_field_type('people', 'number');

        $crud->callback_before_insert(array($this, 'people'));

        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }

//    function people($post_array) {
////        $this->
//        print_r($apl);exit;
//    }

    public function restaurant() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('restaurant');
        
//        $crud->required_fields('restaurant_name');
//        $crud->set_relation_n_n('recipes', 'restaurant_recipe', 'recipe', 'restaurant_id', 'recipe_id', 'recipe_name', 'restaurant_recipe_id');
//        $crud->set_relation_n_n('restaurent', 'restaurant_recipe', 'restaurant', 'restaurant_id', 'recipe_id', 'restaurant_id', 'restaurant_name');
////        $crud->set_relation_n_n('restaurent', 'restaurent_name', 'restaurant_recope_id');
//         
////        $crud->unset_columns('restaurent_id','phone_no','address', 'start_time', 'end_time', 'capacity');
//        $crud->fields('restaurant_name', 'recipes' );
        
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }

    public function recipe() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('recipe');
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }
    
    public function user() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->unset_add();
        $crud->unset_edit();
        $crud->set_table('user');
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }
    
    public function restaurant_recipe() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('restaurant');
        
        $crud->set_relation_n_n('recipes', 'restaurant_recipe', 'recipe', 'restaurant_id', 'recipe_id', 'recipe_name');
        $crud->unset_add();
        $crud->unset_delete();
        $crud->unset_columns('restaurent_id','phone_no','address', 'start_time', 'end_time', 'capacity');
        $crud->fields('restaurant_name', 'recipes' );
        
        
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }

    public function ingredient() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('ingredient');
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }

    public function order() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('order');
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }

    public function ingredient_brand() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('ingredient_brand');
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }

    public function ingredient_catagory() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('ingredient_catagory');
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }

    public function order_recipe() {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');

        $crud->set_table('order_recipe');
        $output = $crud->render();
//        $crud->set_relation('restaurant','reservation','restaurant_id');
        $this->load->view('reservation', $output);
    }

}
