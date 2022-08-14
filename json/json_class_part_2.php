<?php
/**
    Readme
    https://www.sitepoint.com/use-jsonserializable-interface/
 */



class Customer
{

   public $email = null;
   public $name = null;

   public function __construct($email, $name)
   {
       $this->email = $email;
       $this->name = $name;
   }

   public function getName()
   {
       return $this->name;
   }

   public function getEmail()
   {
       return $this->email;
   }

   public function toJson()
   {
       return json_encode([
           'customer' => [
               'email' => $this->getEmail(),
               'name' => $this->getName()
           ]
       ]);
   }
}

$customer = new Customer('customer@sitepoint.com', 'Joe');

echo $customer->toJson();
