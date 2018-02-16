<?php
class Indexmod extends Model{
    function __construct() {
        parent::__construct();   
        //$file = pathinfo(__DIR__);

        
        //var_dump ($this->path);
       // echo "</br>";
        
        
    }
    public function DBsNames($file = "dbs") {
        $this->path = explode("\\", __DIR__);
        array_pop($this->path);
        $this->path = implode("\\", $this->path);
        $plik = $this->path."\\dbaccess\\".$file.'.xml';
        return ($plik);
     
    }
}