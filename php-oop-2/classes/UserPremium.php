<?php

require_once __DIR__ . "/User.php";

class UserPremium extends User {
   private $package;

   public function __construct($_name, $_lastname, $_address, $_package)
   {
      parent::__construct($_name, $_lastname, $_address);
      $this->package = $_package;
      $this->point = 5000;
   }
}