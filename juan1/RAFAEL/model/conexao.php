<?php
class conexao{
  private $local = "localhost";//ou"127.0.00.1"
  private $user = "root";
  private $password = "";//lisboa
  private $database = "notaFiscal";
  private $conectar;

  public function setLocal($local){
    $this->local = $local;
  }
  public function getLocal(){
    return $this->local;
  }
  public function setUser ($user){
    $this->user = $user;
  }
  public function getUser(){
  return   $this->user;
  }
  public function setPassword($password){
    $this->password = $password;
  }
  public function getPassword(){
    return $this->password;
  }
  public function setDatabase($database){
    $this->database = $database;
  }
  public function getDatabase(){
    return $this->database;
  }
  public function setConectar($conectar){
    $this->conectar = $conectar;
  }
  public function getConectar(){
  return   $this->conectar;
  }

  public function __construct(){
    $conectar = new Mysqli(
                  $this->getLocal(),
                  $this->getUser(),
                  $this->getPassword(),
                  $this->getDatabase()
               );
            $this->setConectar($conectar);
  }
}
?>
