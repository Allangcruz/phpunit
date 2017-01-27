<?php

namespace App\Support;

class Collection
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
}

