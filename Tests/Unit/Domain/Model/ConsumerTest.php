<?php


class Tx_MocBeer_Domain_Model_ConsumerTest extends Tx_Extbase_Tests_Unit_BaseTestCase {

	/**
	 * @test
	 */
	public function testThatDrinkCallsOpenMethodOnDrink() {
		$beerMock = $this->getMock('Tx_MocBeer_Domain_Model_Beer');
		$consumer = new Tx_MocBeer_Domain_Model_Consumer();
		$beerMock->expects($this->once())->method('open');
		$consumer->drinkBeer($beerMock);
	}

}