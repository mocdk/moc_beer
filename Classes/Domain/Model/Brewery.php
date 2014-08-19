<?php

class Tx_MocBeer_Domain_Model_Brewery extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var $name
	 */
	protected $name;

	/**
	 * @param mixed $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

}