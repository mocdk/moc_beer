<?php


class Tx_MocBeer_Domain_Model_Beer_BookKeepingFunctionalTest extends Tx_Extbase_Tests_Unit_BaseTestCase {

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
	 * @test
	 */
	public function testThatRecordsCanBeFetched() {
		$data = array (
			'name' => 'Test beer'
		);
		$testUid = $this->testingFramework->createRecord('tx_mocbeer_domain_model_beer', $data);

		/** @var Tx_MocBeer_Domain_Repository_BeerRepository $beerRepository */
		$beerRepository = $this->objectManager->get('Tx_MocBeer_Domain_Repository_BeerRepository');
		$beer = $beerRepository->findByUid($testUid);
		$this->assertEquals('Test beer', $beer->getName());
	}
}