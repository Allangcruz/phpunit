<?php

namespace App\Support;

use IteratorAggregate;

class Collection implements IteratorAggregate
{
	protected $items = [];

	/**
	 * Contrutor da classe
	 *
	 * @param array $items
	 */
	public function __construct(array $items = [])
	{
		$this->items = $items;
	}

	/**
	 * Retorna a collection
	 */
	public function get()
	{
		return $this->items;
	}

	/**
	 * Retorna o count de $items
	 *
	 * @return int
	 */
	public function count()
	{
		return count($this->items);
	}

	/**
	 * implementar a interface InteratorAggregate
	 *
	 * @return array
	 */
	public function getIterator() {
        return new \ArrayIterator($this->items);
    }
}
