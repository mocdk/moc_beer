<?php


class Tx_MocBeer_Domain_Model_BeerTest extends Tx_Extbase_Tests_Unit_BaseTestCase {

	/**
	 * This method is called before each test is executed
	 */
	public function setup() {
	}

	/**
	 * This method is called after each test is executed
	 */
	public function tearDown() {
	}

	/**
	 * @test
	 */
	public function testGetNameUsingSetter() {
		$beer = new Tx_MocBeer_Domain_Model_Beer();
		$beer->setName('Lager');
		$this->assertEquals('Lager', $beer->getName());
	}

	/**
	 * @test
	 */
	public function testGetNameUsingProxy() {
		$proxyName = $this->buildAccessibleProxy('Tx_MocBeer_Domain_Model_Beer');
		$beer = new $proxyName();
		$beer->_set('name', 'Lager');
		$this->assertEquals('Lager', $beer->getName());
	}
}