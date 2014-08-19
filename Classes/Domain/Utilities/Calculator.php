<?php

/**
 * Class Tx_MocBeer_Domain_Utilities_Calculator
 *
 * Rather weird to have a calculator as part of a Beer extension, but its really a good example of
 * unit-testing, so here goes.
 *
 */
class Tx_MocBeer_Domain_Utilities_Calculator {

	/**
	 * @param float $a
	 * @param float $b
	 * @return fload
	 */
	public function add($a, $b) {
		return $a + $b;
	}

	/**
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
	public function multiply($a, $b) {
		return $a * $b;
	}

}