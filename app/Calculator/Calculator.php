<?php

namespace App\Calculator;

class Calculator
{
    protected $operations = [];

    /**
     * Seta os operações da calculadora.
     *
     * @param $operation
     */
    public function setOperation(OperationInterface $operation)
    {
        $this->operations[] = $operation;
    }

    /**
     * Seta multiplas os operações da calculadora.
     *
     * @param $operation
     */
    public function setOperations(array $operations)
    {
        $filteredOperations = array_filter($operations, function($operation) {
            return $operation instanceof OperationInterface;
        });

        $this->operations = array_merge($this->operations, $filteredOperations);
    }

    /**
     * Retorna o tatal de operações.
     *
     * @return integer
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Retorna o calculo da operação.
     *
     * @return interger
     */
     public function calculate()
     {

         if (count($this->operations) > 1) {
             return array_map(function($operation) {
                 return $operation->calculate();
             }, $this->operations);
         }
         return $this->operations[0]->calculate();
     }
}
