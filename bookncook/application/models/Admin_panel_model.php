<?php error_reporting(E_ALL); ini_set('display_errors', 1);


class Admin_panel_model extends CI_Model{



    public function __construct(){

    }

    

    public function sign_in_model($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = ? and password = ? ";
        $query = $this->db->query( $sql, array($email, $password) );
        
        if ($query->num_rows() > 0)
            return true;
        else
            return false;
        
    }
    
   public function get_restaurant_time($id)
    {
        $sql = " SELECT `restaurant_id`, `start_time`, `end_time` FROM `restaurant` WHERE restaurant_id = ? ";
        $query = $this->db->query( $sql, $id );
        return $query->result();

    }








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

    public function  save_reservation($people,$start_time,$end_time,$date,$restaurant_id){
        // echo $restaurant_id;
        $sql = "INSERT INTO reservation (people, start_time, end_time, date, restaurant_id) VALUES (?, ?, ?, ?, ?) ";
         $this->db->query( $sql, array( $people, $start_time,$end_time ,$date,$restaurant_id ,  ) );

    }

public function check_slots($restaurant_id,$start,$end,$people){
    
   $sql  =  $this->db->query("SELECT restaurant.restaurant_id, restaurant.restaurant_name, "
           . "restaurant.phone_no, restaurant.address, restaurant.start_time, "
           . "restaurant.end_time, restaurant.capacity"
           . " FROM restaurant where restaurant.start_time < '$start' "
           . "AND restaurant.end_time > '$end' "
           . "AND restaurant.capacity > $people "
           . "AND restaurant.restaurant_id=$restaurant_id");
   
       //echo $this->db->last_query();
       return $sql->row_array();
   
}

    public function check_reserv($start,$end,$date,$restaurant,$people){
        
        $query = $this->db->query("SELECT * FROM `reservation` as r, `restaurant` as re "
                . "WHERE r.`start_time`='$start'"
                . " AND r.`end_time`='$end' "
                . "AND r.`restaurant_id`=$restaurant "
                . "AND r.`res_date`='$date' AND r.`restaurant_id`=re.`restaurant_id` AND re.`capacity`> $people");
        
        if($this->db->affected_rows() > 0){
           // echo $this->db->last_query();
            return $query->row_array();
        }
          else {
       return false;    
          }
    }
    
   public function update_record($table,$data,$id){
       
       $this->db->where('restaurant_id',$id);
       $query = $this->db->update($table,$data);
       if($this->db->affected_rows() > 0)
           return true;
       else 
           return false;
   }

   function add_record($table,$data){
       $query = $this->db->insert($table,$data);
       
       if($query == 1)       
           return $query;
       else 
           
       return false; 
   }
   
   function lastRes($userid){
       $query  = $this->db->query("select * from `reservation` as r, `restaurant` as re "
               . "where r.`restaurant_id`=re.`restaurant_id` AND r.`user_id`= $userid");
       $query = $query->last_row();
       //echo $this->db->last_query();
       return $query;
   }


}