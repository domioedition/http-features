<?php
//https://www.sitepoint.com/use-jsonserializable-interface/


//class Customer
//{
//
//    private $email = null;
//    private $name = null;
//
//    public function __construct($email, $name)
//    {
//        $this->email = $email;
//        $this->name = $name;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getEmail()
//    {
//        return $this->email;
//    }
//}
//
//$customer = new Customer('customer@sitepoint.com', 'Joe');
//
//$data = [
//    'customer' => [
//        'email' => $customer->getEmail(),
//        'name' => $customer->getName()
//    ]
//];
//
//echo json_encode($data);


//
//class Customer
//{
//
//    public $email = null;
//    public $name = null;
//
//    public function __construct($email, $name)
//    {
//        $this->email = $email;
//        $this->name = $name;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    public function toJson()
//    {
//        return json_encode([
//            'customer' => [
//                'email' => $this->getEmail(),
//                'name' => $this->getName()
//            ]
//        ]);
//    }
//}
//
//$customer = new Customer('customer@sitepoint.com', 'Joe');
//
//echo $customer->toJson();



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
