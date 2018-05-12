<?php

class quiz extends my_app {

    function __construct(){

    }

    function get($id){
        $record = $this->get_record($id);

        $questions = $this->get_questions($id);

        foreach ($questions as $ind => $value){
            if($this->get_options($value)){
                $questions[$ind]->options = $this->get_options($value);
            }else{
                unset($questions[$ind]->options);
            }
        }

        foreach ($record as $ind => $value){
            $record[$ind]->questions = $questions;
        }

        return $record;
    }

    function get_record($id){
        $quiz_model = $this->load_model('quiz');

        return $quiz_model->records($id);
    }

    function get_questions($id){
        $quiz_model = $this->load_model('quiz');

        return $quiz_model->questions($id);
    }

    function get_options($id = array()){
        $quiz_model = $this->load_model('quiz');

        return $quiz_model->options($id->id);
    }
}