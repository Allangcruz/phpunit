<?php

namespace App\Calculator;

interface OperationInterface
{
    /**
     * Seta os operadores para serem calculados.
     *
     * @param $operands
     */
    public function setOperands(array $operands);

    /**
     * Calcula o somatorio dos $operands
     * @return $sum
     */
    public function calculate();

}
