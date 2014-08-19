<?php



class Tx_MocBeer_Controller_BeerController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_MocBeer_Domain_Repository_BeerRepository
	 * @inject
	 */
	protected $beeRepository;

	/**
	 * @return string
	 */
	public function listAction() {
		$this->view->assign('beers', $this->beeRepository->findAll());
	}

	/**
	 * @param Tx_MocBeer_Domain_Model_Beer $beer
	 * @return string
	 */
	public function showAction(Tx_MocBeer_Domain_Model_Beer $beer) {

	}

}