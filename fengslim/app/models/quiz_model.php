<?php
class quiz_model extends my_app {

    private $db;

    function __construct(){
        $this->db = core::db_connect('default');
    }

    function get(){
        $get = $this->db
            ->query('SELECT * FROM x');

        if($get){
            return $get->fetch_object();
        }else{
            return $this->db->error;
        }

    }
}