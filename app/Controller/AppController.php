<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

        public $helpers = array('Markdown');
        public $components = array('Session', 'Auth' => array(
                'loginRedirect' => array('controller' => 'products', 'action' => 'index', 'admin'=>true),
                'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home_fra', 'admin'=>false)
            ),
            'RequestHandler'
        );

        public function beforeRender() {
                if ($this->params['prefix'] == 'admin') {
                        $this->layout = 'admin';
                }
        }

        public function beforeFilter() {
                $this->Auth->allow('gettypes', 'getrecipeTypes', 'display', 'setlanguage', 'index_by_type', 'pro', 'view', 'index', 'getCurrentNews');
                if ($this->Session->check('Config.language')) {
                        Configure::write('Config.language', $this->Session->read('Config.language'));
                }
        }

        public function setlanguage($lang) {
                $this->Session->write('Config.language', $lang);
                $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home_' . $lang));
        }

}
