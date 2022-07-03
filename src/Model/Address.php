<?php

namespace APP\Model;

class Address
{
    private string $address;
    private string $house_number;
    private string $complement;
    private string $neighborhood;
    private string $city;
    private string $zipcode;

    public function __construct(string $address, string $house_number, string $complement, 
    string $neighborhood, string $city, string $zipcode)
    {
        $this->address = $address;
        $this->house_number = $house_number;
        $this->complement = $complement;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->zipCode = $zipcode;
    }
}
