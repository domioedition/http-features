<?php
/**
    Readme
    https://www.sitepoint.com/use-jsonserializable-interface/
 */

class Customer
{
    private $email = null;
    private $name = null;

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
}

$customer = new Customer('customer@sitepoint.com', 'Joe');

$data = [
    'customer' => [
        'email' => $customer->getEmail(),
        'name' => $customer->getName()
    ]
];

echo json_encode($data);

