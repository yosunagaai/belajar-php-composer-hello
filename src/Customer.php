<?php
namespace YhogaDwiputra\Belajar;

class Customer{

    public function __construct(
        private string $name,
        private string $address
    ){}

    public function sayHello(string $name): string
    {
        return "Hello $name, my name is $this->name";
    }
}
