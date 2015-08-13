
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Books_model extends CI_Model {

    public function __construct() {

    }

    public function get_restaurants() {
        $sql = "SELECT * FROM `restaurant` ";
        $query = $this->db->query($sql);
        //echo $this->db->last_query();
        return $query->result();
    }

    public function get_restaurant_time($id) {
        $sql = " SELECT `restaurant_id`, `start_time`, `end_time` FROM `restaurant` WHERE restaurant_id = ? ";
        $query = $this->db->query($sql, $id);
        return $query->result();
    }


    public function check_reservation($rest_id,$people,$start,$end)
    {
        $sql = $this->db->query("SELECT restaurant.restaurant_id, restaurant.restaurant_name,
        restaurant.phone_no, restaurant.address, restaurant.start_time,
            restaurant.end_time, restaurant.capacity
             FROM restaurant where restaurant.start_time < '$start'
            AND restaurant.end_time > '$end'
            AND restaurant.capacity > '$people'
            AND restaurant.restaurant_id = $rest_id"
        );

        // echo $this->db->last_query();
        return $sql->row_array();
    }


//
//    public function  check_reservation($restaurant_id,$date,$people,$start_time,$end_time){
//        // echo $restaurant_id;
//        $sql="SELECT
//r.restaurant_id,r.restaurant_name,r.capacity,rs.start_time,rs.end_time,rs.people,rs.date,r.capacity - SUM(IFNULL(rs.people,0)) AS available FROM restaurant r
//
//                LEFT JOIN reservation rs ON r.restaurant_id = rs.restaurant_id
//              AND ".$date." = rs.`date`
//              AND ".$people." = rs.`people`
//              AND '".$start_time."' = rs.`start_time`
//              AND '".$end_time."' = rs.`end_time`
//
//
//              WHERE r.restaurant_id = ".$restaurant_id."
//
//
//            GROUP BY r.`restaurant_id`";
//        $query=$this->db->query($sql);
//        //echo $this->db->last_query();
//        return $query->row_array();
//
//    }

    public function save_reservation($people, $start_time, $end_time, $date, $restaurant_id) {
        // echo $restaurant_id;
        $sql = "INSERT INTO reservation (people, start_time, end_time, date, restaurant_id) VALUES (?, ?, ?, ?, ?) ";
        $this->db->query($sql, array($people, $start_time, $end_time, $date, $restaurant_id,));
    }

    public function check_slots($start, $end, $people) {

        $sql = $this->db->query("SELECT restaurant.restaurant_id, restaurant.restaurant_name, "
            . "restaurant.phone_no, restaurant.address, restaurant.start_time, "
            . "restaurant.end_time, restaurant.capacity"
            . " FROM restaurant where restaurant.start_time < '$start' "
            . "AND restaurant.end_time > '$end' "
            . "AND restaurant.capacity > $people "
        );

        //echo $this->db->last_query();
        return $sql->result();
        //return $sql->row_array();
    }

    public function check_reserv($start, $end, $date, $restaurant, $people) {

        $query = $this->db->query("SELECT * FROM `reservation` as r, `restaurant` as re "
            . "WHERE r.`start_time`='$start'"
            . " AND r.`end_time`='$end' "
            . "AND r.`restaurant_id`=$restaurant "
            . "AND r.`res_date`='$date' AND r.`restaurant_id`=re.`restaurant_id` AND re.`capacity`> $people");

        if ($this->db->affected_rows() > 0) {
            // echo $this->db->last_query();
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function update_record($table, $data, $id) {

        $this->db->where('restaurant_id', $id);
        $query = $this->db->update($table, $data);
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function add_record($table, $data) {
        $query = $this->db->insert($table, $data);

        if ($query == 1)
            return $query;
        else
            return false;
    }

    function lastRes($userid) {
        $query = $this->db->query("select r.`reservation_id`,r.`people`,r.`start_time`,r.`end_time`,r.`res_date`,r.`unique_code`,r.`restaurant_id`,r.`user_id`,
re.`restaurant_id`,re.`restaurant_name`,re.`address` from `reservation` as r, `restaurant` as re
               where r.`restaurant_id`=re.`restaurant_id` AND r.`user_id`=$userid");
        $query = $query->last_row();
        //echo $this->db->last_query();
        return $query;
    }

    function select_record() {
        $query = $this->db->query("select * from recipe");

        return $query->result_array();
    }

    function select($table,$where=NULL){
        $this->db->select();
        if($where)
            $this->db->where($where);
        $this->db->from($table);
        $query = $this->db->get();
        return $query->row();
    }

}
