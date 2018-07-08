<?php
class Exercise{
    private $ID;
    private $title;
    private $link;
    private $img;
    private $description;

    public function __construct($ID, $title, $link, $img, $description){
        $this->ID = $ID;
        $this->title = $title;
        $this->link = $link;
        $this->img = $img;
        $this->description = $description;
    }

    public function parseInsertQuery($tableName){
        return "INSERT INTO {$tableName} (id, title, link, img)
            VALUES ({$this->ID}, '{$this->title}', '{$this->link}', '{$this->img}')";

    }
    
}
?>