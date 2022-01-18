<?php

class Product {
   private $name;
   private $code;
   protected $price;
   private $dicount = 0;
   private $quantity;
   private $brand;


   public function __construct($_name, $_brand, $_price)
   {
      $this->name = $_name;
      $this->brand = $_brand;
      $this->price = $_price;
   }

   // SET
   public function setName($_name){
      $this->name = $_name;
   }
   public function setCode($_code){
      $this->code = $_code;
   }
   public function setPrice($_price){
      $this->price = $_price;
   }
   public function setDiscount($_dicount){
      $this->dicount = $_dicount;
   }
   public function setQuantity($_quantity){
      $this->quantity = $_quantity;
   }
   public function setBrand($_brand){
      $this->brand = $_brand;
   }

   
   // GET
   public function getName(){
      return $this->name;
   }
   public function getCode(){
      return $this->code;
   }
   public function getPrice(){
      return $this->price;
   }
   public function getDiscount(){
      return $this->dicount;
   }
   public function getQuantity(){
      return $this->quantity;
   }
   public function getBrand(){
      return $this->brand;
   }




}