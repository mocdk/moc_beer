<?php


class Tx_MocBeer_Domain_Model_Beer extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var float
	 */
	protected $alcoholByVolume;

	/**
	 * @param float $alcoholByVolume
	 * @return void
	 */
	public function setAlcoholByVolume($alcoholByVolume) {
		$this->alcoholByVolume = $alcoholByVolume;
	}

	/**
	 * @return float
	 */
	public function getAlcoholByVolume() {
		return $this->alcoholByVolume;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	public function  getABV() {
		return $this->alcoholByVolume;
	}
}