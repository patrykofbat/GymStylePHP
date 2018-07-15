<?php

include("DatabaseManager.php");

include("models/Exercise.php");
class Exporter{

    private $dbManager;

    public function __construct(){
        $this->dbManager = new DatabaseManager();
    }


    public function fromFile($path, $table){
        $ar = explode("\n", file_get_contents($path));
        foreach($ar as $key=>$elem){
            $ar_2 = explode(',', $elem);
            $exercise = new Exercise(3000+$key, $ar_2[0], $ar_2[1], 'none', 'none');
            $this->dbManager->execute($exercise->parseInsertQuery($table));
        }
    }
    
}


?>