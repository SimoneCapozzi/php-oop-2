<?php 

class Product 
{  
  public $prezzo;
  public $nome;
  public $categoria;
  public $descrizione;
  public $codice_prodotto;
  public $quantita;

  public function __construct($_nome, $_prezzo)
  {
    $this->prezzo = $_prezzo;
    $this->nome = $_nome;
  }


}


?>