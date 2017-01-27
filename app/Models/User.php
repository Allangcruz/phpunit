<?php

namespace App\Models;

class User
{
	protected $firstName;
	protected $lastName;
	protected $email;

	/**
	 * Seta o $firstName de acordo com o parametro informado.
	 *
	 * @param $firstName
	 */
	public function setFirstName($firstName)
	{
		$this->firstName = trim($firstName);
	}

	/**
	 * Retorna o atributo firstName.
	 *
	 * @return $firstName
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * Seta o $lastName de acordo com o parametro informado.
	 *
	 * @param $lastName
	 */
	public function setLastName($lastName)
	{
		$this->lastName = trim($lastName);
	}

	/**
	 * Retorna o atributo lastName.
	 *
	 * @return $lastName
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * Retorna a concatenação "$firstName $lastName"
	 *
	 * @return string
	 */
	public function getFullName()
	{
		return $this->firstName. ' ' .$this->lastName;
	}

	/**
	 * Retorna o atributo email.
	 *
	 * @return $email
	 */
	public function setEmail($email)
	{
		$this->email = trim($email);
	}

	/**
	 * Retorna o atributo email.
	 *
	 * @return $email
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Retorna array com o [full_name, email]
	 *
	 * @return array
	 */
	public function getEmailVariables()
	{
		return [
			'full_name' => $this->getFullName(),
			'email' => $this->getEmail(),
		];
	}

}

