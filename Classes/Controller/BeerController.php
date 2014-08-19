<?php



class Tx_MocBeer_Controller_BeerController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_MocBeer_Domain_Repository_BeerRepository
	 * @inject
	 */
	protected $beerRepository;

	/**
	 * @param Tx_MocBeer_Domain_Repository_BeerRepository $repository
	 * @return void
	 */
	public function injectBeerRepository(Tx_MocBeer_Domain_Repository_BeerRepository $repository) {
		$this->beerRepository = $repository;
	}

	/**
	 * @return string
	 */
	public function listAction() {
		$this->view->assign('beers', $this->beerRepository->findAll());
	}

	/**
	 * @param Tx_MocBeer_Domain_Model_Beer $beer
	 * @return string
	 */
	public function showAction(Tx_MocBeer_Domain_Model_Beer $beer) {

	}

	/**
	 *
	 */
	public function newAction() {
		$this->view->assign('beer', $this->objectManager->create('Tx_MocBeer_Domain_Model_Beer'));
	}

	/**
	 * @param Tx_MocBeer_Domain_Model_Beer $beer
	 */
	public function createAction(Tx_MocBeer_Domain_Model_Beer $beer) {
		$this->beerRepository->add($beer);
		$this->redirect('list');
	}

}