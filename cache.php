<?php

class Cache {
  private $file_name;

  public function __construct($file_name){
    $this->file_name = $file_name;
  }  
  public function fileExists(){
//verifica se o arquivo cache existe
    return file_exists($this->file_name);
  }
  public function save($content){
    $file = fopen($this->file_name, 'w+');
    fwrite($file, $content);
    fclose($file);    
  }
  public function getContent(){
    if($this->fileExists()){
      return file_get_contents($this->file_name);
    }
    return false;
  }
  public function elapsedTime(){
    if($this->fileExists()){
      $time = time() - filemtime($this->file_name);
      return $time/60/60;
    }
    return false;
  }

}