<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class cooking_model extends CI_Model {

    public function __construct() {


        $this->load->database();
    }

    public function get_restaurants() {
        $sql = "SELECT `restaurant_id`, `restaurant_name` FROM `restaurant` ";
        $query = $this->db->query($sql);
        return $query->result();
    }

//    public function reservation(){
//
//        $sql ="SELECT restaurant.res_start_time,rest_end_time,"
//
//
//    }

    public function get_recipies($id) {

        $sql = "SELECT
            recipe.recipe_id,
                recipe.recipe_name,
                restaurant.restaurant_name
              FROM restaurant_recipe
                INNER JOIN restaurant
                  ON restaurant_recipe.restaurant_id = restaurant.restaurant_id
                INNER JOIN recipe
                  ON restaurant_recipe.recipe_id = recipe.recipe_id
                WHERE restaurant_recipe.restaurant_id = ?";
        $query = $this->db->query($sql, $id);
        return $query->result_array();
    }


    function show_recipies($id){
        $sql = "SELECT
            recipe.recipe_id,
                recipe.recipe_name,
                restaurant.restaurant_name
              FROM restaurant_recipe
                INNER JOIN restaurant
                  ON restaurant_recipe.restaurant_id = restaurant.restaurant_id
                INNER JOIN recipe
                  ON restaurant_recipe.recipe_id = recipe.recipe_id
                WHERE recipe.recipe_id=$id";
        $query = $this->db->query($sql, $id);
        //echo $this->db->last_query();
        return $query->row_array();

    }


    function get_ingredients($id){
        $query = $this->db->query("SELECT ri.`recipe_ingredient_id`,r.`recipe_id`,"
            . "r.`recipe_name`,i.`ingredient_id`,i.`ingredient_name` "
            . "FROM `recipe_ingredient` as ri,`recipe` as r,`ingredient` as i "
            . "WHERE ri.`recipe_id`=r.`recipe_id` "
            . "AND ri.`ingredient_id`=i.`ingredient_id` AND r.`recipe_id`=$id ");
        if($query->num_rows()>0){

            return $query->result();

        }else {return FALSE;

        }
    }



//this query returns data from three tables procedures, ingredients and recipes 
    public function get_procedures($ing_id) {
        $sql = "SELECT
`procedure`.description,
`procedure`.ingredient_quantity_unit,
ingredient.ingredient_name,
recipe.recipe_name,
cooking_task.cooking_task_name,
`procedure`.estimate,
unit.unit_name,
`procedure`.ingredient_quantity
FROM
`procedure`
INNER JOIN ingredient ON `procedure`.ingredient_id = ingredient.ingredient_id
INNER JOIN recipe ON `procedure`.recipe_id = recipe.recipe_id
INNER JOIN cooking_task ON `procedure`.cooking_task_id = cooking_task.cooking_task_id
INNER JOIN unit ON `procedure`.unit_id = unit.unit_id
where ingredient.ingredient_id=$ing_id";

        $query = $this->db->query($sql);
        return $query->result();
    }

}