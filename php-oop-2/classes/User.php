<?php

require_once __DIR__ . "/Product.php";

class User {
   private $name;
   private $lastname;
   private $phone;
   private $email;
   private $date;
   private $address;
   protected $points = 0;
   protected $purchasedProducts;

   public function __construct($_name, $_lastname, $_address)
   {
      $this->name = $_name;
      $this->lastname = $_lastname;
      $this->address = $_address;
   }

   // SET
   public function setName($_name){
      $this->name = $_name;
   }
   public function setLastname($_lastname){
      $this->lastename = $_lastname;
   }
   public function setPhone($_phone){
      $this->phone = $_phone;
   }
   public function setEmail($_email){
      $this->email = $_email;
   }
   public function setDate($_date){
      $this->date = $_date;
   }
   public function setAddress($_address){
      $this->address = $_address;
   }
   public function setPoint($_points){
      $this->point = $_points;
   }
   public function setPurchasedProducts($_purchasedProducts){
      $this->purchasedProducts = $_purchasedProducts;
   }
   
   // GET
   public function getName(){
      return $this->name;      
   }
   public function getLastname(){
      return $this->lastname;
   }
   public function getPhone(){
      return $this->phone;
   }
   public function getEmail(){
      return $this->email;
   }
   public function getDate(){
      return $this->date;
   }
   public function getAddress(){
      return $this->address;
   }
   public function getPoints(){
      return $this->points;
   }
   public function getPurchasedProducts(){
      return $this->purchasedProducts;
   }

   public function buyProduct($product) {
      $this->purchasedProducts[] = $product->getName(); 
      $this->points = $this->points + (round($product->getPrice() / 40, 0) * 15);
      return  $this->purchasedProducts;
   }

}