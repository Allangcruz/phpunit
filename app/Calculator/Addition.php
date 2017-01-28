<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Addition extends OperationAbstract implements OperationInterface
{
    /**
     * Calcula o somatorio dos $operands
     *
     * @return $sum
     */
    public function calculate()
    {
        if (empty($this->operands)) {
            throw new NoOperandsException;
        }

        return array_sum($this->operands);
    }
}
