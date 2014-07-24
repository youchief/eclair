<?php
App::uses('AppController', 'Controller');
/**
 * RecipeTypes Controller
 *
 * @property RecipeType $RecipeType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RecipeTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
        
         public function getrecipeTypes(){
                $this->RecipeType->recursive = 1;
                return $this->RecipeType->find('list');
        }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->RecipeType->recursive = 0;
		$this->set('recipeTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->RecipeType->exists($id)) {
			throw new NotFoundException(__('Invalid recipe type'));
		}
		$options = array('conditions' => array('RecipeType.' . $this->RecipeType->primaryKey => $id));
		$this->set('recipeType', $this->RecipeType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->RecipeType->create();
			if ($this->RecipeType->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The recipe type has been saved'), 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipe type could not be saved. Please, try again.'), 'default', array('class'=>'alert alert-error'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->RecipeType->exists($id)) {
			throw new NotFoundException(__('Invalid recipe type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecipeType->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The recipe type has been saved'), 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipe type could not be saved. Please, try again.'), 'default', array('class'=>'alert alert-error'));
			}
		} else {
			$options = array('conditions' => array('RecipeType.' . $this->RecipeType->primaryKey => $id));
			$this->request->data = $this->RecipeType->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->RecipeType->id = $id;
		if (!$this->RecipeType->exists()) {
			throw new NotFoundException(__('Invalid recipe type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecipeType->delete()) {
			$this->Session->setFlash(__('Recipe type deleted'), 'default', array('class'=>'alert alert-success'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recipe type was not deleted'), 'default', array('class'=>'alert alert-error'));
		return $this->redirect(array('action' => 'index'));
	}
}
