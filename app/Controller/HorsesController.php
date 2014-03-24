<?php
App::uses('AppController', 'Controller');
/**
 * Horses Controller
 *
 * @property Horse $Horse
 * @property PaginatorComponent $Paginator
 */
class HorsesController extends AppController {



public $uses = array('Horse','Event', 'Eventype');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
         $this->layout='default';
		$this->Horse->recursive = 0;
		$this->set('horses', $this->Paginator->paginate());
	}


/**
 * index method
 *
 * @return void
 */
	public function index_details() {
		$this->Horse->recursive = 0;
		$this->set('horses', $this->Paginator->paginate());
	}

	/**
 * index method
 *
 * @return void
 */
	public function index_details2() {
		$this->Horse->recursive = 0;
		$this->set('horses', $this->Paginator->paginate());
	}

	public function csv() {
		$horses = $this->Horse->find('all', array(
			'recursive' => -1,
		));
		$this->set(compact('horses'));
		$this->layout = false;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		 $this->layout = 'default';
		if (!$this->Horse->exists($id)) {
			throw new NotFoundException(__('Invalid horse'));
		}
		$options = array('conditions' => array('Horse.' . $this->Horse->primaryKey => $id));
		$this->set('horse', $this->Horse->find('first', $options));

		$horse = $this->Horse->find('first', array('conditions' => array('Horse.id' => $id)));

		$father = $this->Horse->find('first', array('conditions' => array('Horse.id' => $horse['Horse']['lft'])));
		$mother = $this->Horse->find('first', array('conditions' => array('Horse.id' => $horse['Horse']['rght'])));

        $walks = $this->Horse->Walk->find('list'); 
		$this->set(compact('father','mother', 'events'));

		$this->Event->recursive = 0;
		$this->set('walks', $this->Paginator->paginate());

		//$this->set('events', $this->Paginator->paginate());

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Horse']['image']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Horse']['image']['name'];

			$ext = $this->Img->ext($this->request->data['Horse']['image']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Horse']['image']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Horse']['image'] = $dst;
			} else {
				$this->request->data['Horse']['image'] = '';
			}


			$this->Horse->create();
			if ($this->Horse->save($this->request->data)) {
				$this->Session->setFlash(__('The horse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horse could not be saved. Please, try again.'));
			}
		}
		$genders = $this->Horse->Gender->find('list');
		$breeds = $this->Horse->Breed->find('list', array('conditions' => array('Breed.state' => 1)));
		$types = $this->Horse->Type->find('list', array('conditions' => array('Type.state' => 1)));
		$colors = $this->Horse->Color->find('list', array('conditions' => array('Color.state' => 1)));
		$states = $this->Horse->State->find('list', array('conditions' => array('State.state' => 1)));
		$lfts = $this->Horse->find('list', array('conditions' => array('Horse.gender_id' => 1)));
		$rghts = $this->Horse->find('list', array('conditions' => array('Horse.gender_id' => 2)));
		$this->set(compact('genders', 'breeds', 'types', 'colors', 'states','lfts','rghts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Horse->exists($id)) {
			throw new NotFoundException(__('Invalid horse'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Horse->save($this->request->data)) {
				$this->Session->setFlash(__('The horse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horse could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Horse.' . $this->Horse->primaryKey => $id));
			$this->request->data = $this->Horse->find('first', $options);
		}
		$genders = $this->Horse->Gender->find('list');
		$breeds = $this->Horse->Breed->find('list');
		$types = $this->Horse->Type->find('list');
		$colors = $this->Horse->Color->find('list');
		$states = $this->Horse->State->find('list');
		$this->set(compact('genders', 'breeds', 'types', 'colors', 'states'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Horse->id = $id;
		if (!$this->Horse->exists()) {
			throw new NotFoundException(__('Invalid horse'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Horse->delete()) {
			$this->Session->setFlash(__('The horse has been deleted.'));
		} else {
			$this->Session->setFlash(__('The horse could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
