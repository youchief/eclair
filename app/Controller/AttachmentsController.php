<?php

App::uses('AppController', 'Controller');

/**
 * Attachments Controller
 *
 * @property Attachment $Attachment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AttachmentsController extends AppController {

        /**
         * Components
         *
         * @var array
         */
        public $components = array('Paginator', 'Session');

        public function admin_uploadmany() {
                
        }

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Attachment->recursive = 0;
                $this->set('attachments', $this->Paginator->paginate());
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->Attachment->exists($id)) {
                        throw new NotFoundException(__('Invalid attachment'));
                }
                $options = array('conditions' => array('Attachment.' . $this->Attachment->primaryKey => $id));
                $this->set('attachment', $this->Attachment->find('first', $options));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Attachment->create();
                        if ($this->Attachment->save($this->request->data)) {
                                $this->Session->setFlash(__('The attachment has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The attachment could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
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
                if (!$this->Attachment->exists($id)) {
                        throw new NotFoundException(__('Invalid attachment'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Attachment->save($this->request->data)) {
                                $this->Session->setFlash(__('The attachment has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The attachment could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                        }
                } else {
                        $options = array('conditions' => array('Attachment.' . $this->Attachment->primaryKey => $id));
                        $this->request->data = $this->Attachment->find('first', $options);
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
                $this->Attachment->id = $id;
                if (!$this->Attachment->exists()) {
                        throw new NotFoundException(__('Invalid attachment'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->Attachment->delete()) {
                        $this->Session->setFlash(__('Attachment deleted'), 'default', array('class' => 'alert alert-success'));
                        return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Attachment was not deleted'), 'default', array('class' => 'alert alert-error'));
                return $this->redirect(array('action' => 'index'));
        }

}
