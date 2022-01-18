<?php

require_once __DIR__ . "/User.php";

class UserPremium extends User {
   private $package;

   public function __construct($_name, $_lastname, $_address, $_package)
   {
      parent::__construct($_name, $_lastname, $_address);
      $this->package = $_package;
      $this->points = 5000;
   }

   public function setPackage($_package){
      $this->package = $_package;
   }
   
   // GET
   public function getPackage(){
      return $this->package;      
   }

   public function buyProduct($product) {
      $this->purchasedProducts[] = $product->getName(); 
      $this->points = $this->points + (round($product->getPrice() / 40, 0) * 15);
      return  $this->purchasedProducts;
   }
}