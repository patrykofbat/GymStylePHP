<?php
class Importer{
    private $dbHost = 'localhost:3306';
    private $dbUser = 'patryk';
    private $dbPass = 'patryk';
    private $dbConn;

    public function fromFile($path, $labelsAr){
        $content = explode("\n",file_get_contents($path));
        $this->establishConn();

        return $content;

    }

    private function establishConn(){
        $this->dbConn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass);
        if(! $this->dbConn ) {
            die('Could not connect: ' . mysqli_connect_error());
         }
         echo 'Connected successfully';
    }

}
?>