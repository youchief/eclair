<?php

App::uses('AppModel', 'Model');

/**
 * Type Model
 *
 * @property Product $Product
 */
class Type extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'name';
        public $actsAs = array(
            'Translate' => array(
                'name' => 'nameTranslation',
                'description' => 'descriptionTranslation'
            ),
           
        );

        /**
         * Validation rules
         *
         * @var array
         */
        public $validate = array(
            'name' => array(
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
         * hasMany associations
         *
         * @var array
         */
        public $hasMany = array(
            'Product' => array(
                'className' => 'Product',
                'foreignKey' => 'type_id',
                'dependent' => false,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'exclusive' => '',
                'finderQuery' => '',
                'counterQuery' => ''
            )
        );
        
        

}
