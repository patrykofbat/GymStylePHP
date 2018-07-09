<?php
class DatabaseManager{

    private $dbHost = 'localhost:3306/GymStyle?useUnicode=true&characterEncoding=UTF-8';
    private $dbUser = 'patryk';
    private $dbPass = 'patryk';
    private $dbConn;

    public function __construct(){
        $this->establishConn();
    }

    public function __destruct(){
        $this->dbConn->close();
    }

    private function establishConn(){
        $this->dbConn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, "GymStyle");
        if( $this->dbConn->connect_error) {
            die('Could not connect: ' . $dbConn->connect_error );
        }
        #echo ('Connected successfully');
    }

    public function execute($sql){
        if($this->dbConn->query($sql)){
            echo 'Query executed successfully';
        }
        else{
            echo 'Failed to execute query '.'('.$this->dbConn->errno.')';
            echo $sql;
        }
    }

    public function select(){
        $ar = array();
        $result = $this->dbConn->query('SELECT * FROM exercises');
        while($row = $result->fetch_assoc()){
            array_push($ar, $row);
        }
        $result->free();
        return $ar;
        
    }


}


?>