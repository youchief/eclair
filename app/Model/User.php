<?php

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * User Model
 *
 * @property Role $Role
 */
class User extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'email';

        /**
         * Validation rules
         *
         * @var array
         */
        public $validate = array(
            'username' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'password' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            
        );

        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
      */
        public function beforeSave($options = array()) {
                if (isset($this->data[$this->alias]['password'])) {
                        $passwordHasher = new SimplePasswordHasher();
                        $this->data[$this->alias]['password'] = $passwordHasher->hash(
                                $this->data[$this->alias]['password']
                        );
                }
                return true;
        }

}
