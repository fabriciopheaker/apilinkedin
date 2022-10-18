<?php


class Cache{

  private $file_name;

  public function __construct($file_name){
    $this->file_name = $file_name;
  }  
  public function fileExists(){
    return file_exists($this->file_name);//verifica se o arquivo cache existe
  }
  public function save($content){ // salva o conteudo no arquivo
    $file = fopen($this->file_name, 'w+');// abre o arquivo e informa que sera escrito
    fwrite($file, $content);// escreve o arquivo
    fclose($file);    //fecha o arquivo
  }
  public function getContent(){
    if($this->fileExists()){ // verifica se o arquivo existe e busca o conteudo 
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