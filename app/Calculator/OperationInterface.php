<?php

namespace App\Calculator;

interface OperationInterface
{
    /**
     * Calcula o somatorio dos $operands
     * @return $sum
     */
    public function calculate();

}
