<?php

namespace APP\Model;

class Product
{
    private string $name;
    private float $price;
    private int $quantity;
    private Provider $provider;

    public function __construct(float $cost, float $tax, float $operationCost, float $lucre, 
    string $name, int $barCode, int $quantity, Provider $provider, bool $isActive = true)
    {
        // inicializando as propriedades
        $this->barCode = $barCode;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->provider = $provider;
        $this->isActive = $isActive;
        
        //calcular preço de vendas
        self::calculateFinalPrice(cost: $cost, tax: $tax, costOfOperation: $operationCost,lucre: $lucre);
    }

    private function calculateFinalPrice(float $cost, float $tax, float $costOfOperation, float $lucre = 0.4): void
    {
        $this->price = ($cost + $tax + $costOfOperation) / (1 - $lucre);
    }

    public function calculateCostPrice(float $tax, float $costOfOperation, float $lucre = 0.4): float
    {
        return $this->price - $tax - $costOfOperation - ($this->price * $lucre);
    }

    public function calculateMarkup(float $costOfOperation): float
    {
        return $this->price / $costOfOperation;
    }
}
