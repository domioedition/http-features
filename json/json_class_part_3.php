<?php
/**
    Readme
    https://www.sitepoint.com/use-jsonserializable-interface/
 */



class Customer implements JsonSerializable
{

   private $name;
   private $email;

   public function __construct($email, $name)
   {
       $this->name = $name;
       $this->email = $email;
   }

   public function getName()
   {
       return $this->name;
   }

   public function getEmail()
   {
       return $this->email;
   }

   public function jsonSerialize()
   {
       return [
           'customer' => [
               'email' => $this->email,
               'name' => $this->name
           ]
       ];
   }
}

$customer = new Customer('customer@sitepoint.com', 'Joe');

echo json_encode($customer);
