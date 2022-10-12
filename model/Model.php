<?php

namespace App\model;

use App\database\Connect;
use PDO;
use PDOException;
use stdClass;

abstract class Model
{

  /** @return /object|null  */
  private $data;

  /** @return /PDOException  */
  private $fail;

  /** @return /string |null  */
  private $message;

  public function __set($name, $value)
  {
    if (empty($this->data)) {
      $this->data = new stdClass();
    }
    $this->data->$name = $value;
  }

  public function __isset($name)
  {
    return isset($this->data->$name);
  }
  public function __get($name)
  {
    return ($this->data->$name ?? null);
  }



  public function data(): ?object
  {
    return $this->data;
  }


  public function fail()
  {
    return $this->fail;
  }

  public function message(): ?string
  {
    return $this->message;
  }

  protected function create()
  {
  }
  protected function read(string $select, string $param = null)
  {
    try {

      $con = Connect::getInstance()->prepare($select);

      if ($param) {
        echo "<pre>";
        parse_str($param, $arr);
        foreach ($arr as $key => $value) {
          $type = (is_numeric($value)) ? PDO::PARAM_INT : PDO::PARAM_STR;
          $con->bindValue(":{$key}", $value, $type);
        }
      }
      $con->execute();

      return $con;
    } catch (PDOException $exception) {
      $this->fail = $exception;
      echo $exception;
    }
  }



  protected function update()
  {
  }
  protected function delete()
  {
  }
  protected function safe()
  {
  }
  protected function filter()
  {
  }
}
