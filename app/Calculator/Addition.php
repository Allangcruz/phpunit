<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Addition implements OperationInterface
{
    protected $operands = [];

    /**
     * Seta os operadores para serem calculados.
     *
     * @param $operands
     */
    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }

    /**
     * Calcula o somatorio dos $operands
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
