<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
	protected $user;

	/**
	 * Inicializa cenarios de teste.
	 */
	public function setUp()
	{
		$this->user = new \App\Models\User;
	}

	/**
	 * Verifica se o $firstName setado informado corresponde ao retornado.
	 */
	public function testThatWeCanGetTheFirstName()
	{
		$this->user->setFirstName('Allan');

		$this->assertEquals($this->user->getFirstName(), 'Allan');
	}

	/**
	 * Verifica se o $lasttName setado informado corresponde ao retornado.
	 */
	public function testThatWeCanGetTheLastName()
	{
		$this->user->setLastName('Gonçalves da Cruz');

		$this->assertEquals($this->user->getLastName(), 'Gonçalves da Cruz');
	}

	/**
	 * Verifica se o $firstname esta concatenado com $lastName.
	 */
	public function testFullNameIsReturn()
	{
		$this->user->setFirstName('Allan');
		$this->user->setLastName('Gonçalves da Cruz');

		$this->assertEquals($this->user->getFullName(), 'Allan Gonçalves da Cruz');
	}

	/**
	 * Verifica se o $fistName e $lastName setado não possui espaço.
	 */
	public function testFirstAndLastNameAreTrimmed()
	{
		$this->user->setFirstName('      Allan    ');
		$this->user->setLastName('     Gonçalves da Cruz');

		$this->assertEquals($this->user->getFirstName(), 'Allan');
		$this->assertEquals($this->user->getLastName(), 'Gonçalves da Cruz');
	}

	/**
	 * Verifica se o $email setado informado corresponde ao retornado.
	 */
	public function testEmailAddressCanBeSet()
	{
		$this->user->setEmail('allangcruz@gmail.com');

		$this->assertEquals($this->user->getEmail(), 'allangcruz@gmail.com');
	}

	/**
	 * Verifica se o retorno das credencias do usuario esta correto.
	 */
	public function testEmailVariableContainCorrectValues()
	{
		$this->user->setFirstName('Allan');
		$this->user->setLastName('Gonçalves da Cruz');
		$this->user->setEmail('allangcruz@gmail.com');

		$emailVariables = $this->user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Allan Gonçalves da Cruz');
		$this->assertEquals($emailVariables['email'], 'allangcruz@gmail.com');
	}
}
