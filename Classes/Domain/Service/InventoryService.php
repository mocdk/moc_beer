<?php


class Tx_MocBeer_Domain_Service_InventoryService implements t3lib_Singleton {

	/**
	 * @param Tx_MocBeer_Domain_Model_Beer $beer
	 */
	public function removeBeerFromInventory(Tx_MocBeer_Domain_Model_Beer $beer) {
		$message = date("d/m-Y H:i") . "\t" . $beer->getName() . ' removed from inventory';
		file_put_contents(PATH_site . 'typo3temp/moc_beer.log', $message . PHP_EOL, FILE_APPEND);
	}

}