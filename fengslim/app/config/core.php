<?php
class core{
    private static $instancia;
    private $ini_config;
    
    function __construct(){
        $this->setTimeZone();
        $this->setDebug();
        $this->db_connect();
    }

    function db_connect($db_call = 'default'){                
        $this->ini_config = parse_ini_file("configuration.ini", true); 

        $mysqli = new mysqli(
            $this->ini_config['hosts']['hostname'][$db_call], 
            $this->ini_config['hosts']['username'][$db_call],
            $this->ini_config['hosts']['password'][$db_call], 
            $this->ini_config['hosts']['database'][$db_call] 
        );

        if($mysqli->connect_error)
            die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());

        return $mysqli;
    }

    function setTimeZone(){
        $this->ini_config = parse_ini_file("configuration.ini", true); 

        date_default_timezone_set($this->ini_config['timezone']['timezone']);
    }

    function setDebug(){
        $this->ini_config = parse_ini_file("configuration.ini", true); 

        if($this->ini_config['debug']['debug'] == 0){
            ini_set('display_errors', 0);
            ini_set('log_errors', 0);
        }else{
            ini_set('display_errors', 1);
            ini_set('log_errors', 1);
            error_reporting(E_ALL & ~E_NOTICE);
        }
    }

    function load_model($model = ''){
        try {
            if(strpos('_model', $model)){
                return new $model();
            }else{
                $model_class =  $model.'_model';

                return new $model_class();
            }
        } catch (XException $ex) {
            return false;
        }
    }

}