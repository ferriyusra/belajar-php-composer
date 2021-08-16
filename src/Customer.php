<?php 

namespace Feri\Belajar;

class Customer {

    public function __construct (private string $name)
    {
    }

    public function sayHello(string $name = "guest"): string
    {
        return "hello $name, my name is $this->name";
    }

}

?>