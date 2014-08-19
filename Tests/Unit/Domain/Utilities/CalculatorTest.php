<?php

/**
 * Class Tx_MocBeer_Domain_Utilities_CalculatorTest
 */
class Tx_MocBeer_Domain_Utilities_CalculatorTest extends Tx_Extbase_Tests_Unit_BaseTestCase {

	public function dataProviderForAddTest() {
		return array(
			array (0, 1, 1),
			array (1, 2, 3),
			array (5, 7, 12),
		);
	}

	/**
	 * @test
	 * @dataProvider dataProviderForAddTest
	 */
	public function testAddition($a, $b, $c) {
		$calculator = new Tx_MocBeer_Domain_Utilities_Calculator();
		$this->assertEquals($c, $calculator->add($a, $b));
	}

}