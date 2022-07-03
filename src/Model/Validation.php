<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name): bool
    {
        return mb_strlen($name) > 2;
    }

    public static function validateNumber(int|float $value)
    {
        return $value > 0;
    }

    public static function validateBarCode(string $barCode):bool
    {
        return mb_strlen($barCode) == 13 && mb_substr($barCode,0,3) == '789';
    }

    //Criar validação do CNPJ
    public static function validateCnpjEmpty(string $cnpj):bool
    {
        return mb_strlen($cnpj) > 0 ;
    }
    public static function validateCnpjSmall(string $cnpj):bool
    {
        return mb_strlen($cnpj) < 15 ;
    }
    //

    public static function validateProviderName(string $providerName): bool
    {
        return mb_strlen($providerName) > 0;
    }


    //Criar validação do Telefone
    public static function validatePhoneEmpty(string $phone): bool
    {
        return mb_strlen($phone) > 0;
    }
    public static function validatePhoneSmall(string $phone): bool
    {
        return mb_strlen($phone) < 12;
    }
    //




    public static function validateAddress(string $address): bool
    {
        return mb_strlen($address) > 0;
    }

    //Criar validação do CEP
    public static function validateZipCodeEmpty(string $zipcode):bool
    {
        return mb_strlen($zipcode) > 0;
    }
    public static function validateZipCodeSmall(string $zipcode):bool
    {
        return mb_strlen($zipcode) < 9;
    }
    //

    public static function validateCity(string $city):bool
    {
        return mb_strlen($city) > 0;
    }


    //Criar validação numero da casa/local
    public static function validateHouseNumberEmpty(string $house_number):bool
    {
        return mb_strlen($house_number) > 0;
    }
    public static function validateHouseNumberSmall(string $house_number):bool
    {
        return mb_strlen($house_number) < 9;
    }
    //

    public static function validateNeighborhood(string $neighborhood):bool
    {
        return mb_strlen($neighborhood) > 0;
    }

    public static function validateComplement(string $complement):bool
    {
        return mb_strlen($complement) > 0;
    }
}
