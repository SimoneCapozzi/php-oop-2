<?php 

require_once __DIR__ . '/Credit_Card.php';

class User 
{
  use Credit_Card;

  private $nome;
  private $cognome;
  private $email;
  private $indirizzo;
  private $carta_di_credito;
  public $username;
  
  public function __construct($_username)
  {
    $this->username = $_username;
  }

  




}

?>