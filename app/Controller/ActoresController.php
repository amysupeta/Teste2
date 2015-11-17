<?php
App::uses('AppController', 'Controller');
/**
 * Actores Controller
 *
 * @property Actore $Actore
 * @property PaginatorComponent $Paginator
 */
class ActoresController extends AppController {

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
		$this->Actore->recursive = 0;
		$this->set('actores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Actore->exists($id)) {
			throw new NotFoundException(__('Invalid actore'));
		}
		$options = array('conditions' => array('Actore.' . $this->Actore->primaryKey => $id));
		$this->set('actore', $this->Actore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Actore->create();
			if ($this->Actore->save($this->request->data)) {
				$this->Session->setFlash(__('The actore has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actore could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Actore->exists($id)) {
			throw new NotFoundException(__('Invalid actore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Actore->save($this->request->data)) {
				$this->Session->setFlash(__('The actore has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actore could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Actore.' . $this->Actore->primaryKey => $id));
			$this->request->data = $this->Actore->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Actore->id = $id;
		if (!$this->Actore->exists()) {
			throw new NotFoundException(__('Invalid actore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Actore->delete()) {
			$this->Session->setFlash(__('The actore has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The actore could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
