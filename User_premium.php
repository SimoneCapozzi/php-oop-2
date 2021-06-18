<?php 

class User_premium extends User
{
  private $discount;
  
  
  public function __construct($_username, $_discount)
  {  
    parent::__construct($_username);  
    $this->discount = $_discount;
  }

  




}

?>