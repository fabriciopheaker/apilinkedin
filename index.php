<?php

require_once __DIR__ . '/Request.php';
require_once __DIR__ . '/Connect.php';
require_once __DIR__ . '/Card.php';
require_once __DIR__ . '/Cache.php';


class Pagina
{
  private $result;

  public $busca;
  

  public function show($param)
  {
    $this->result  = json_decode($param);
  }

  public function tratar()
  {
    $tratamento = $this->result;
    foreach ($tratamento as $vagas) {
      (new Card($vagas->company_name, $vagas->job_title, $vagas->job_location,  $vagas->linkedin_job_url_cleaned,  $vagas->posted_date))->show();
    }
  }

  public function salvar()
  {
    return $lista = $this->result;
  }
}
// $cache = new Cache("Cache/meuCache.html");
  // $cache->save($filipe);
$t = new Pagina();
$t->show($response);
$t->tratar();
