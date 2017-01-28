<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Division extends OperationAbstract implements OperationInterface
{
    /**
     * Calcula o somatorio dos $operands.
     *
     * @return $result
     */
    public function calculate()
    {
        if (empty($this->operands)) {
            throw new NoOperandsException;
        }

        return array_reduce(array_filter($this->operands), function($a, $b){
            return ($a !== null && $b !== null) ? $a / $b : $b;
        }, null);
    }
}
