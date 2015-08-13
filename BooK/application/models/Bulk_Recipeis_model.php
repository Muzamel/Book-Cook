<?php error_reporting(E_ALL); ini_set('display_errors', 1);

class Bulk_Recipeis_model extends CI_Model
{

    public function __construct()
    {


    }

    public function get_bulk_recipies($id)
    {


        $sql = "SELECT bulk_delivery.bulk_delivery_id,bulk_delivery.quantity,bulk_delivery.price,recipe.recipe_name,bulk_delivery.max_quantity,recipe.recipe_id ,restaurant.restaurant_id,restaurant_name
              FROM bulk_delivery INNER JOIN restaurant ON bulk_delivery.restaurant_id=restaurant.restaurant_id
              INNER JOIN recipe ON bulk_delivery.recipe_id=recipe.recipe_id
              WHERE bulk_delivery.restaurant_id = '$id'";

        $query = $this->db->query($sql);
        return $query->result();


    }

    public function insert_order($user,$recipies, $quantity,$date ,$time,$totalbill)
    {
        $this->db->trans_start();
        foreach($quantity as $key => $user_quantity) {
            $this->db->query("UPDATE bulk_delivery SET max_quantity = max_quantity - '$user_quantity'");
                $this->db->query("INSERT INTO bulk_delivery_order (id, user_quantity, date,time,total_bill,bulk_delivery_id)
               VALUES ('$user','$user_quantity','$date','$time','$totalbill','$recipies')");

        }
        $this->db->trans_complete();
    }








}








