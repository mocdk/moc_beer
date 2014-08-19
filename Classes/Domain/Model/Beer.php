<?php


class Tx_MocBeer_Domain_Model_Beer extends Tx_Extbase_DomainObject_AbstractEntity {

	const STATE_CLOSED = 0;
	const STATE_OPEN = 1;


	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var float
	 */
	protected $alcoholByVolume;

	/**
	 * @var integer
	 */
	protected $state = self::STATE_CLOSED;

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

	/**
	 * Shorthand function for getAlcoholByVolume
	 *
	 * @return float
	 */
	public function getABV() {
		return $this->getAlcoholByVolume();
	}

	/**
	 * Method for opening a beer
	 *
	 * @throws Tx_MocBeer_Exception_BeerAlreadyOpenException
	 * @return void
	 */
	public function open() {
		if ($this->state === self::STATE_OPEN) {
			throw new Tx_MocBeer_Exception_BeerAlreadyOpenException('This beer is already open');
		}
		$this->state = OPEN;

		// @todo Call external webservice notifying someone that this particular beer is now open.
	}

}