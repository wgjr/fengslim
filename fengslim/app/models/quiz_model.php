<?php
class quiz_model extends my_app {

    private $db;

    function __construct(){
        $this->db = core::db_connect('default');
    }

    function records($id){
        $get = $this->db
                ->query('SELECT id, name, description, category, basePoints, startDate, endDate,                                       
                                CASE
                                    WHEN isActive = 1 THEN "true" 
                                    ELSE "false"  
                                END AS "isActive",
                                CASE
                                    WHEN alreadyAnswered = 1 THEN "true" 
                                    ELSE "false"  
                                END AS "alreadyAnswered",
                                "questions"                               
                                FROM records
                                WHERE id ='.$id);
        if($get){
            while ($return = $get->fetch_object()){
                $envia[] = $return;
            }
            return $envia;
        }else{
            return $this->db->error;
        }
    }

    function questions($id){
        $get = $this->db
                ->query('SELECT id, text, type, "options"
                                FROM questions
                                WHERE id_records ='.$id);
        if($get){
            while ($return = $get->fetch_object()){
                $envia[] = $return;
            }
            return $envia;
        }else{
            return $this->db->error;
        }
    }

    function options($id){
        $get = $this->db
                ->query('SELECT id, text, value
                                FROM options
                                WHERE id_questions ='.$id);
        if($get){
            while ($return = $get->fetch_object()){
                $envia[] = $return;
            }
            return $envia;
        }else{
            return $this->db->error;
        }
    }
}