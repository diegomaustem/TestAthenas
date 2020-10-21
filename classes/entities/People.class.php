<?php

class People{

  private $name;
  private $password;
  private $id;

  function getId(){
    return $this->id;
  }
  function setId($id){
    $this->id = $id;
  }

  function getName() {
    return $this->name;
  }
  function getPassword() {
    return $this->password;
  }

  function setName($name) {
    $this->name = $name;
  }
  function setPassword($password) {
    $this->password = $password;
  }

}

?>
