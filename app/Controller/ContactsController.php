<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');


/**
 * Contacts Controller
 *
 * @property Contact $Contact
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContactsController extends AppController {

        /**
         * Components
         *
         * @var array
         */
        public $components = array('Paginator', 'Session');
        
        public function index() {
                if ($this->request->is('post')) {
                        $this->Contact->create();
                        if ($this->Contact->save($this->request->data)) {
                                $this->Session->setFlash(__('Merci pour votre message, nous vous contacterons prochainement.'), 'default', array('class' => 'alert alert-success'));

                                $Email = new CakeEmail();
                                $Email->from(array($this->request->data['Contact']['email'] => $this->request->data['Contact']['firstname']." ".$this->request->data['Contact']['lastname']));
                                $Email->to('eclair@eclair.ch');
                                $Email->subject('Message depuis eclair.ch');
                                $Email->send($this->request->data['Contact']['message']);

                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('Il y a une erreur, merci de réessayer.'), 'default', array('class' => 'alert alert-danger'));
                        }
                }
        }

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Contact->recursive = 0;
                $this->set('contacts', $this->Paginator->paginate());
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->Contact->exists($id)) {
                        throw new NotFoundException(__('Invalid contact'));
                }
                $options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
                $this->set('contact', $this->Contact->find('first', $options));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Contact->create();
                        if ($this->Contact->save($this->request->data)) {
                                $this->Session->setFlash(__('The contact has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The contact could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
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
                if (!$this->Contact->exists($id)) {
                        throw new NotFoundException(__('Invalid contact'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Contact->save($this->request->data)) {
                                $this->Session->setFlash(__('The contact has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The contact could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                        }
                } else {
                        $options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
                        $this->request->data = $this->Contact->find('first', $options);
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
                $this->Contact->id = $id;
                if (!$this->Contact->exists()) {
                        throw new NotFoundException(__('Invalid contact'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->Contact->delete()) {
                        $this->Session->setFlash(__('Contact deleted'), 'default', array('class' => 'alert alert-success'));
                        return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Contact was not deleted'), 'default', array('class' => 'alert alert-error'));
                return $this->redirect(array('action' => 'index'));
        }

}
