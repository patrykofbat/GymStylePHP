<?php
class DatabaseManager{

    private $dbHost = 'localhost:3306';
    private $dbUser = 'patryk';
    private $dbPass = 'patryk';
    private $dbConn;

    private function establishConn(){
        $this->dbConn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, "GymStyle");
        if( $this->dbConn->connect_error) {
            die('Could not connect: ' . $dbConn->connect_error );
        }
        echo 'Connected successfully';
    }

    public function execute($sql){
        $this->establishConn();
        if($this->dbConn->query($sql)){
            echo 'Query executed successfully';
        }
        else{
            echo 'Failed to execute query '.'('.$this->dbConn->errno.')';
            echo $sql;
        }
    }


}


?>