<?php
class Importer{
    public function fromFile($path, $labelsAr){
        $content = explode("\n",file_get_contents($path));
        return $content;

    }


}
?>