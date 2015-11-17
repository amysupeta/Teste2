<?php
App::uses('AppController', 'Controller');
/**
 * Filmes Controller
 *
 * @property Filme $Filme
 * @property PaginatorComponent $Paginator
 */
class FilmesController extends AppController {

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
		$this->Filme->recursive = 0;
		$this->set('filmes', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Filme->exists($id)) {
			throw new NotFoundException(__('Invalid filme'));
		}
		$options = array('conditions' => array('Filme.' . $this->Filme->primaryKey => $id));
		$this->set('filme', $this->Filme->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Filme->create();
			if ($this->Filme->save($this->request->data)) {
				$this->Session->setFlash(__('The filme has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filme could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$categorias = $this->Filme->Categorium->find('list');
		$pessoas = $this->Filme->Pessoa->find('list');
		$estados = $this->Filme->Estado->find('list');
		$this->set(compact('categorias', 'pessoas', 'estados'));
	}

        
        
        
	public function edit($id = null) {
		if (!$this->Filme->exists($id)) {
			throw new NotFoundException(__('Invalid filme'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Filme->save($this->request->data)) {
				$this->Session->setFlash(__('The filme has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The filme could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Filme.' . $this->Filme->primaryKey => $id));
			$this->request->data = $this->Filme->find('first', $options);
		}
		$categorias = $this->Filme->Categorium->find('list');
		$pessoas = $this->Filme->Pessoa->find('list');
		$estados = $this->Filme->Estado->find('list');
		$this->set(compact('categorias', 'pessoas', 'estados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Filme->id = $id;
		if (!$this->Filme->exists()) {
			throw new NotFoundException(__('Invalid filme'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Filme->delete()) {
			$this->Session->setFlash(__('The filme has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The filme could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
       // public function ListarfilmesComCategoria($id = null) {// Buscar 
        //$var = $this->request->data['Filme']['buscador'];
        //$this->Filme->recursive = 1;
       // $this->Paginator->settings = array('conditions' => array('Categoria.function' => "$var"), 'limit' => 200);
       // $result = $this->Paginator->paginate('Filme');
        //$this->set('result', $this->Paginator->paginate());
       // $this->set(compact('result'));
//}
        
        
        
       
        public function listarFilmePordata(){
        //metodo para buscar todos filmes por data
        $query = $this->request->data['Filme']['buscador']; 
        $conditions = array(
            'conditions' => array(
                'Filme.deadline LIKE' => "%$query%"
            )
        );
        }      
      
       public function listarFilmeCategoria(){
        //metodo para listar filme por categoria
        $query = $this->request->data['Filme']['buscador']; 
        $conditions = array(
            'conditions' => array(
                'Filme.deadline LIKE' => "%$query%"
            )
        );
        }  
        
        public function controlarDevolucao(){
          
            
        $data = $this->request->data['Filme']['buscador'];// data limite de devolucao
       
        $cond = array('conditions' => array('Filme.deadline < ' => $data, $data > 7));
        $this->Paginator->settings = array($cond);
                
        $this->Session->setFlash(__('o utente deve pagar multa pois escedeu o limite da entrega'), 'default', array('class' => 'alert alert-danger'));
        
        
            
              
        }      
     }
