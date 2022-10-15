<?php

require_once "cache.php";


$conteudo = "<H1>Fabricio</H1>";
$cache = new Cache("Cache/meuCache.html");
$cache->save($conteudo);
echo $cache->elapsedTime();
if(!$cache->fileExists() || $cache->elapsedTime() > 30){
  echo "Consultou a api";
}else {
  echo "Usou arquivo";
}



