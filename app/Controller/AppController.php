<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

        public $helpers = array('Markdown');
        public $components = array('Session',
            'RequestHandler'
        );

        public function beforeRender() {
                if ($this->params['prefix'] == 'admin') {
                        $this->layout = 'admin';
                }
        }

        public function beforeFilter() {
                if ($this->Session->check('Config.language')) {
                        Configure::write('Config.language', $this->Session->read('Config.language'));
                }
        }

        public function setlanguage($lang) {
                $this->Session->write('Config.language', $lang);
                $this->redirect($this->referer());
        }

}
