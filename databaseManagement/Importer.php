<?php
class Importer{
    private $dbHost = 'localhost:3306';
    private $dbUser = 'patryk';
    private $dbPass = 'patryk';
    private $dbConn;

    public function fromFile($path, $labelsAr){
        $this->establishConn();
        $content = explode("\n",file_get_contents($path));

        return $content;

    }

    private function establishConn(){
        $this->dbConn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, "GymStyle");
        if( $this->dbConn->connect_error) {
            die('Could not connect: ' . $dbConn->connect_error );
        }
        echo 'Connected successfully';
    }

}
?>