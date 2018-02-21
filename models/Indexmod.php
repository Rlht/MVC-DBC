<?php
class Indexmod extends Model{
    function __construct() {
        parent::__construct();   
    }
    public function DBsDataToArray($file = "dbs") {
        //zwraca tablicę z danymi pliku XML
        $this->path = explode("\\", __DIR__);
        array_pop($this->path);
        $this->path = implode("\\", $this->path);
        $plik = $this->path."\\dbaccess\\".$file.'.xml';
        $xml = simplexml_load_file($plik);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        
        return ($array);
     
    }
}