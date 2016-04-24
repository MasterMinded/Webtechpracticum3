<?php

Class Datatestv3 extends CI_Model {


    public function getData()
    {

        $testquery = $this->db->query("SELECT * FROM Users");
        return $testquery->result();

        
    }
}
?>