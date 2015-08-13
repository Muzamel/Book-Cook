<?php error_reporting(E_ALL); ini_set('display_errors', 1);


class Bulk_model extends CI_Model
{


    public function __construct()
    {


    }


    public function get_bulk_restaurants()
    {
        $sql = "SELECT  `restaurant_id`,`restaurant_name` FROM `restaurant` ";
        $query = $this->db->query( $sql );
        return $query->result();
//        echo($result);
//        exit();

    }
}