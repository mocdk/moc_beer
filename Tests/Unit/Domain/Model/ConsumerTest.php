<?php


class Tx_MocBeer_Domain_Model_ConsumerTest extends Tx_Extbase_Tests_Unit_BaseTestCase {


	/**
	 * @test
	 */
	public function testThatDrinkCallsOpenMethodOnDrink() {
		$beerMock = $this->getMock('Tx_MocBeer_Domain_Model_Beer');
		$consumer = new Tx_MocBeer_Domain_Model_Consumer();
		$beerMock->expects($this->once())->method('open');

		$inventoryServiceMock = $this->getMock('Tx_MocBeer_Domain_Service_InventoryService', array(), array(), 'tempMock');
		$consumer->injectInventoryService($inventoryServiceMock);

		$consumer->drinkBeer($beerMock);

	}

	/**
	 * @test
	 */
	public function testThatInventoryServiceIsCalledWhenConsumerDrinksBeer() {

		$beerMock = $this->getAccessibleMock('Tx_MocBeer_Domain_Model_Beer');
		$beerMock->_set('name', 'Test beer');
		$consumer = $this->objectManager->get('Tx_MocBeer_Domain_Model_Consumer');

		$inventoryServiceMock = $this->getMock('Tx_MocBeer_Domain_Service_InventoryService', array(), array(), 'tempMock');
		$consumer->injectInventoryService($inventoryServiceMock);
		$inventoryServiceMock->expects($this->once())->method('removeBeerFromInventory')->will($this->returnValue(TRUE));

		$consumer->drinkBeer($beerMock);
	}

}