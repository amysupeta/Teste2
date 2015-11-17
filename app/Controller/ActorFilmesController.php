<?php
App::uses('AppController', 'Controller');
/**
 * ActorFilmes Controller
 *
 * @property ActorFilme $ActorFilme
 * @property PaginatorComponent $Paginator
 */
class ActorFilmesController extends AppController {

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
		$this->ActorFilme->recursive = 0;
		$this->set('actorFilmes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActorFilme->exists($id)) {
			throw new NotFoundException(__('Invalid actor filme'));
		}
		$options = array('conditions' => array('ActorFilme.' . $this->ActorFilme->primaryKey => $id));
		$this->set('actorFilme', $this->ActorFilme->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActorFilme->create();
			if ($this->ActorFilme->save($this->request->data)) {
				$this->Session->setFlash(__('The actor filme has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actor filme could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$actors = $this->ActorFilme->Actor->find('list');
		$filmes = $this->ActorFilme->Filme->find('list');
		$this->set(compact('actors', 'filmes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActorFilme->exists($id)) {
			throw new NotFoundException(__('Invalid actor filme'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActorFilme->save($this->request->data)) {
				$this->Session->setFlash(__('The actor filme has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actor filme could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ActorFilme.' . $this->ActorFilme->primaryKey => $id));
			$this->request->data = $this->ActorFilme->find('first', $options);
		}
		$actors = $this->ActorFilme->Actor->find('list');
		$filmes = $this->ActorFilme->Filme->find('list');
		$this->set(compact('actors', 'filmes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActorFilme->id = $id;
		if (!$this->ActorFilme->exists()) {
			throw new NotFoundException(__('Invalid actor filme'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActorFilme->delete()) {
			$this->Session->setFlash(__('The actor filme has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The actor filme could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
