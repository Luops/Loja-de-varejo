<?php

namespace APP\Model;

use APP\Model\Provider;
use APP\Model\Address;
use APP\Utils\Redirect;
use APP\Model\Validation;

require "../../vendor/autoload.php";

if(empty($_POST)){
    session_start();
    Redirect::redirect(
        type: 'error', message:'Requisição inválida'
    );
}

$providerName = $_POST["providername"];
$providerCnpj = $_POST["cnpj"];
$providerPhone = $_POST["phone"];
$providerAddress = $_POST["provideraddress"];
$providerNeighborhood = $_POST["neighborhood"];
$providerCity = $_POST["city"];
$providerZipcode = $_POST["zipcode"];
$providerComplement = $_POST["complement"];
$providerHouse_number = $_POST["house_number"];


$error = array();

if(!Validation::validateName($providerName)) {
    array_push($error, "Campo Nome não pode estar vazio!!");
}

//Validar CNPJ
if(!Validation::validateCnpjEmpty($providerCnpj)) {
    array_push($error, "Campo CNPJ não pode estar vazio!!");
}
if(!Validation::validateCnpjSmall($providerCnpj)) {
    array_push($error, "Campo CNPJ deve haver no máximo 14 caracteres!");
}

//

//Validar Telefone
if(!Validation::validatePhoneEmpty($providerPhone)) {
    array_push($error, "Campo telefone não pode estar vazio!");
}
if(!Validation::validatePhoneSmall($providerPhone)) {
    array_push($error, "Campo Telefone deve haver no máximo 11 caracteres!");
}
//

if(!Validation::validateAddress($providerAddress)) {
    array_push($error, "Campo Rua não pode estar vazio!");
}

if(!Validation::validateNeighborhood($providerNeighborhood)) {
    array_push($error, "Campo bairro não pode estar vazio!");
}

if(!Validation::validateCity($providerCity)) {
    array_push($error, "Campo cidade não pode estar vazio!");
}

//Validar CEP
if(!Validation::validateZipCodeEmpty($providerZipcode)) {
    array_push($error, "Campo CEP não pode estar vazio!");
}
if(!Validation::validateZipCodeSmall($providerZipcode)) {
    array_push($error, "Campo CEP deve haver no máximo 8 caracteres!");
}
//

if(!Validation::validateComplement($providerComplement)) {
    array_push($error, "Campo complemento não pode estar vazio!");
}

//Validar campo número da casa/local
if(!Validation::validateHouseNumberEmpty($providerHouse_number)) {
    array_push($error, "Campo número não pode estar vazio!");
}

if(!Validation::validateHouseNumberSmall($providerHouse_number)) {
    array_push($error, "Campo número deve haver no máximo 8 caracteres!");
}
//

if ($error) {
    Redirect::redirect(
        message: $error,
        type:'warning'
    );
    } else {
    $provider = new Provider(cnpj: $providerCnpj, name: $providerName, phone: $providerPhone, address: new Address(
        address: '',
        house_number: '',
        complement: '',
        neighborhood: '',
        city: '',
        zipcode: ''
    ));
    Redirect::redirect(
        message: "o Fornecedor $providerName foi cadastrado com sucesso"
    );
}
