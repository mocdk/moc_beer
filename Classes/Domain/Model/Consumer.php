<?php


class Tx_MocBeer_Domain_Model_Consumer {

	/**
	 * @var Tx_MocBeer_Domain_Service_InventoryService
	 * @inject
	 */
	protected $inventoryService;

	/**
	 * @param Tx_MocBeer_Domain_Service_InventoryService $service
	 */
	public function injectInventoryService(Tx_MocBeer_Domain_Service_InventoryService $service) {
		$this->inventoryService = $service;
	}

	/**
	 * @param Tx_MocBeer_Domain_Model_Beer $beer
	 * @return void
	 */
	public function drinkBeer(Tx_MocBeer_Domain_Model_Beer $beer) {
		$beer->open();
		//@todo: Do actual drinking...
		$this->inventoryService->removeBeerFromInventory($beer);
	}
}