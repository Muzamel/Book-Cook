<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Booking_Controller extends CI_Controller {

    private $book;

    public function __construct() {
        parent::__construct();

        $this->book = new Books_model();
        $this->name = $this->session->userdata('name');
        $this->FirstName = $this->session->userdata('firstName');
        $this->userId = $this->session->userdata('userID');

        if ($this->session->userdata('userID')) {

        } else {
            redirect(base_url() . 'index.php/login');
        }
    }

    public function index() {
        $this->view();
    }

    function header() {
        $this->load->view('includes/header');
    }

    function footer() {
        $this->load->view('includes/footer');
    }

    public function view() {

        $id = $this->session->userdata('userID');
        $data['result'] = $this->book->get_restaurants();
        $data['results'] = $this->book->select_record();
        $data['record'] = $this->book->lastRes($id);
        //print_r($data['record']);
        //exit;
        if ($data['record']) {

            $this->header();
            $this->load->view('restaurants/booking', $data);
            $this->footer();
        } else {
            $data['result'] = $this->book->get_restaurants();
            $this->header();
            $this->load->view('restaurants/booking', $data);
            $this->footer();
        }
    }

    public function insert_people() {

        $people = $this->input->post('no_of_people');

        $this->book->insert_into_db($people);
        redirect('Booking_Controller/view');
    }

    public function check_reservation() {

        extract($_POST);
        //echo "<pre>";
        //print_r($_POST);
        //$date = date('Y-m-d',strtotime($date));
        $result = $this->book->check_reservation($restaurant_id, $people, $start_time, $end_time);

        // print_r($data);
        //exit;
        // foreach ($result as $d) {
        //$result['capacity']    = $result['capacity'];
        // }

        $peoplee = $result['capacity'];
        if ($peoplee < $people) {
            $result['warning'] = 'Capacity Esceeds';
        } else {
            $result['capa'] = $peoplee - $people;
        }
        echo json_encode(array('data' => $result));
        //echo $a;
        //$new_no = $people - $people;
        //$avail=$data['available'];
        //echo $avail;
        // exit;
        //if( $avail > 3 ){
        //  $this->book->save_reservation($peoplee,$start_time,$end_time,$date,$restaurant_id);
        ;        //}else
        // alert ('Not Available');
        //    exit;
    }

    public function get_time() {

        extract($_POST);
        $data = $this->book->get_restaurant_time($id);
//        print_r($data);exit;


        $output = '';
        $output .= '
                   
                      <h3> Reserve Book Slot </h3>

                        <div style="  height:50px; " class="bootstrap-timepicker">
                            <ul style="float:left; list-style:none;">
                                <li style="width:200px; float:left;">
                                    <label for="Start time" class="control-label">Start Time</label>

                                    <input readonly="" id="timepicker1" type="text" value="' . $data[0]->start_time . '" class="input-small form-control"
                                           style="color: black; width:75px; "/>
                                    <i class="icon-time"></i>
                                </li>

                                <li style="width:200px; float:left;">
                                    <label for="End time" class=" control-label" style=" ">End Time</label>
                                    <input readonly id="timepicker2" type="text"  value="' . $data[0]->end_time . '"class="input-small form-control"
                                           style="color:black;width:75px;  "> 
                       
</li>
                            </ul>

                        </div>
                    ';

        // print_r($rows);

        echo json_encode(array('data' => $output));
        exit;
    }

    function reserve_table() {

        //echo "<pre>";
        // print_r($_POST);
        //exit;
        extract($_POST);
        $date = date('Y-m-d', strtotime($res_date));
        $rest_data = $this->book->select("restaurant", array('restaurant_id' => $restaurant_id));
        // $check = $this->book->check_slots($restaurant_id,$start_time,$end_time,$no_of_people);
        $check1 = $this->book->check_reserv($start_time, $end_time, $date, $restaurant_id, $noPeople);

        // echo "<pre>";
        //print_r($rest_data);
        //echo "<pre>";
        // print_r($check1);
        // exit;

        $people = $rest_data->capacity;



        if ($check1 > 0) {
            $this->session->set_flashdata("reservation", "<div class='alert alert-warning'>Reservations is already done</div>");
            redirect(base_url() . 'index.php/booking_controller');
        } else {

            $new_no = $people - $noPeople;
            $code = "SELECT LPAD(IFNULL(MAX(`unique_code`),'100000000')+1,9,0) AS a FROM `reservation` ";
            $query = $this->db->query($code);
            $codeG = $query->row();
            $id = $codeG->a;

            $array_one = array(
                'people' => $noPeople,
                'start_time' => $start_time,
                'end_time' => $end_time,
                'restaurant_id' => $restaurant_id,
                'res_date' => $date,
                'unique_code' => $id,
                'recipe'=>$food_based_restaurant,
                'user_id' => $this->session->userdata('userID')
            );
            //  print_r($array_one);
//exit;
            $array_two = array(
                'capacity' => $new_no
            );
            // $where = array('restaurant_id'=>$restaurant_id);
            $this->book->update_record('restaurant', $array_two, $restaurant_id);

            $response = $this->book->add_record('reservation', $array_one);
            //print_r($response);
            //exit;
            if ($response) {

                //print_r($data);
                //exit;

                $this->session->set_flashdata('success', '<h2><div class="alert alert-success">Thank You For your Reservation</div></h2>');
                redirect(base_url() . 'index.php/booking_controller');
            } else {
                $this->session->set_flashdata('failure', '<div class="alert alert-success">Record Not Inserted. beta dusri date ya time select kar..</div>');
                redirect(base_url() . 'index.php/booking_controller');
            }
        }
    }

    function get_data() {

        header('Content-Type: application/x-json; charset=utf-8');
        extract($_POST);
        //$no_of_people = $this->input->post('peoples');

        $start = explode(' ', $start_time);
        $end = explode(' ', $end_time);
        $d = $start[0];
        $dd = $end[0];
        echo json_encode($check = $this->book->check_slots($d, $dd, $people));
        //echo "<pre>";
        // print_r($check);
        // $people  = $check['capacity'];
        //$data['checking'] = $check;
        //if($people < $no_of_people){
        // }
        /* if ($capacity > $no_of_people){

          echo "Slots are available";
          }else{
          echo "No slots are available right now ...";
          } */
        //print_r($result);
        //foreach ($check as $d) {
        // $data['restaurant_id']    = $d->restaurant_id;
        //$data['restaurant_name']    = $d->restaurant_name;
        //$data['start_time'] = $d->start_time;
        //}
        //echo json_encode($check);
    }

    function get_restaurants() {

        $recipe_id = $this->input->post('recipe_name');
        $query = $this->db->query("SELECT * FROM `recipe` as r, `restaurant` as rt, `restaurant_recipe` as rr
             WHERE rr.`recipe_id`= r.`recipe_id`
              AND rr.`restaurant_id`= rt.`restaurant_id` AND r.`recipe_name` = '$recipe_id'");

        //$query = $this->db->get();
        $result = $query->result();
        //print_r($result);

        foreach ($result as $d) {

            $data['restaurant_id'] = $d->restaurant_id;
            $data['restaurant_name'] = $d->restaurant_name;
        }
        echo json_encode($data);
    }

}
