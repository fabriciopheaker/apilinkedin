<?php

class Card
{

  private $empresa;
  private $vaga;
  private $local;
  private $url;
  private $postagem;


  public function __construct($empresa, $vaga, $local, $url, $postagem)
  {
    $this->empresa = $empresa;
    $this->vaga = $vaga;
    $this->local = $local;
    $this->url =   $url;
    $this->postagem = $postagem;
  }

  public function show()
  {
    $empresa = $this->empresa;
    $vaga = $this->vaga;
    $local = $this->local;
    $url = $this->url;
    $postagem =  $this->postagem;
    require __DIR__ . '/components/jobs.html';
  }
}
