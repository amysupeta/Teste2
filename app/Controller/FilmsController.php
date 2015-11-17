<?php
App::uses('AppController', 'Controller');
/**
 * Films Controller
 *
 * @property Film $Film
 * @property PaginatorComponent $Paginator
 */
class FilmsController extends AppController {

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
		$this->Film->recursive = 0;
		$this->set('films', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Film->exists($id)) {
			throw new NotFoundException(__('Invalid film'));
		}
		$options = array('conditions' => array('Film.' . $this->Film->primaryKey => $id));
		$this->set('film', $this->Film->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Film->create();
			if ($this->Film->save($this->request->data)) {
				$this->Session->setFlash(__('The film has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The film could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$people = $this->Film->Person->find('list');
		$categories = $this->Film->Categorie->find('list');
		$statuses = $this->Film->Status->find('list');
		$actors = $this->Film->Actor->find('list');
		$this->set(compact('people', 'categories', 'statuses', 'actors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Film->exists($id)) {
			throw new NotFoundException(__('Invalid film'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Film->save($this->request->data)) {
				$this->Session->setFlash(__('The film has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The film could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Film.' . $this->Film->primaryKey => $id));
			$this->request->data = $this->Film->find('first', $options);
		}
		$people = $this->Film->Person->find('list');
		$categories = $this->Film->Categorie->find('list');
		$statuses = $this->Film->Status->find('list');
		$actors = $this->Film->Actor->find('list');
		$this->set(compact('people', 'categories', 'statuses', 'actors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Film->id = $id;
		if (!$this->Film->exists()) {
			throw new NotFoundException(__('Invalid film'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Film->delete()) {
			$this->Session->setFlash(__('The film has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The film could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
