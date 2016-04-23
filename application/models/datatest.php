<?php

Class Datatest extends CI_Model {


    public function getData()
    {

        return $this->db->get('test')->result();
    }
}
?>