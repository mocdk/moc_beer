<?php

class Tx_MocBeer_Controller_BeerTest extends Tx_Extbase_Tests_Unit_BaseTestCase {

	/**
	 * @var Tx_Phpunit_Framework
	 */
	protected $testingFramework;

	public function setup() {
		$this->testingFramework = new Tx_Phpunit_Framework('tx_mocbeer');
	}

	public function tearDown() {

		$this->testingFramework->cleanUp();
		unset($this->testingFramework);
	}

	/**
	 * @var
	 */
	public function testThatCreateActionCreatesRecordAndRedirectsUserToListAction() {
		$beer = new Tx_MocBeer_Domain_Model_Beer();
		$beer->setIsDummyRecord(TRUE);
		$this->testingFramework->markTableAsDirty('tx_mocbeer_domain_model_beer');
		$beer->setName('Test beer');

		/** @var Tx_MocBeer_Controller_BeerController $controller */
		$controller = $this->getAccessibleMock('Tx_MocBeer_Controller_BeerController', array('redirect'));

		// Inject needed flash message container mock
		$flashMessageContainerMock = $this->getAccessibleMock('Tx_Extbase_MVC_Controller_FlashMessages');
		$controller->injectFlashMessageContainer($flashMessageContainerMock);
		$flashMessageContainerMock->expects($this->atLeastOnce())->method('add');

		// Since the controller is now created as a mock, we need to inject the repository manually...
		// This is not very nice.
		$controller->injectBeerRepository($this->objectManager->get('Tx_MocBeer_Domain_Repository_BeerRepository'));

		// Expect that the redirect is called with argument 'list'
		$controller->expects($this->once())->method('redirect')->with('list');

		// Call the createAction that we wish to test
		$controller->createAction($beer);

		// We need to manualle call the persistence manager to make sure data is actually written!
		/** @var Tx_Extbase_Persistence_ManagerInterface $persistenceManager */
		$persistenceManager = $this->objectManager->get('Tx_Extbase_Persistence_ManagerInterface');
		$persistenceManager->persistAll();

		// Assert that the new created object really exists
		$this->assertTrue($this->testingFramework->existsRecord('tx_mocbeer_domain_model_beer', 'name="Test beer"'));


	}

}