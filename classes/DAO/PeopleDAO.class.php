<?php
class PeopleDAO extends Connection{

  private $connect;
  public function __construct() {
    $this->connect = new Connection();
  }

  public function insert($people) {
    $sql = $this->connect->getConnect()->prepare("INSERT INTO user(nameEmployee,passwordEmployee) VALUES (?,?)");
    $sql->bindValue(1, $people->getName());
    $sql->bindValue(2, $people->getPassword());
    return $sql->execute();
  }

  public function search(){
    $sql = $this->connect->getConnect()->prepare("SELECT * FROM user");
    $sql->execute();
    return $sql;

  }

  public function update($people){
    $sql = $this->connect->getConnect()->prepare("UPDATE user SET nameEmployee = :nome, senhaUsuario = :senha WHERE idUsuario = :id");
    $sql->bindValue(":name", $people->getName());
    $sql->bindValue(":password", $people->getPassword());
    $sql->bindValue(":id", $people->getId());
    return $sql->execute();
  }

  public function delete($people){
    $sql = $this->connect->getConnect()->prepare("DELETE FROM user WHERE idUsuario = :id");
    $sql->bindValue(":id", $people->getId());
    return $sql->execute();
  }
}

?>
