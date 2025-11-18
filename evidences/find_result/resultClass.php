<?php 
class student{
    public $id;
    public $name;
    public $batch;
    public $file; //$this->file

    function __construct($file)
    {

        $this->file = $file;
        // $this->file = "result_sheet.txt";
    }
    
    function result($fid){ //101
       $data = file($this->file);
    //    file("result_sheet.txt")
       foreach($data as $line){
          list($id, $name, $batch, $result) =  explode(",", $line);
          if($fid == $id){
            return $id  . ", " . $name . ", " .  $batch . ", ". $result;
          }
       }
    }

}
?>