<?php

namespace App\Calculator;

abstract class OperationAbstract
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
}
