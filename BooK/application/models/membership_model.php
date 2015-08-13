<?php

class Membership_model extends CI_Model {

    function validate($username,$password) {

        $this->db->where('username',$username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('user');
echo $this->db->last_query();
       return $query->first_row();
    }

    function create_member($new_member_insert_data) {



       

        $insert = $this->db->insert('user', $new_member_insert_data);
        return $insert;
    }

}
