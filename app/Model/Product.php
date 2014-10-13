<?php

App::uses('AppModel', 'Model');
CakePlugin::load('Uploader');

/**
 * Product Model
 *
 * @property Type $Type
 * @property Recipe $Recipe
 */
class Product extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'name';
        public $order = 'Product.order ASC';
        public $actsAs = array(
            'Translate' => array(
                'name' => 'nameTranslation',
                'description' => 'descriptionTranslation',
                'ingredients'=>'ingredientsTranslation',
                'alergy_informations'=>'alergy_informationsTranslation',
                'energy_value'=>'energy_valueTranslation'
            ),
            'Uploader.Attachment' => array(
                // Do not copy all these settings, it's merely an example

                'image' => array(
                    'tempDir' => TMP,
                    'transforms' => array(
                        'imageSmall' => array(
                            'class' => 'crop',
                            'self' => true,
                            'width' => 670,
                        ),
                    ),
                    'nameCallback' => 'formatName'
                ),
            ),
        );
        
        public function formatName() {
                return time();
        }

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
            
            'type_id' => array(
                'numeric' => array(
                    'rule' => array('numeric'),
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
        public $belongsTo = array(
            'Type' => array(
                'className' => 'Type',
                'foreignKey' => 'type_id',
                'conditions' => '',
                'fields' => '',
                'order' => ''
            )
        );

        /**
         * hasMany associations
         *
         * @var array
         */
        public $hasAndBelongsToMany = array(
		'Recipe' => array(
			'className' => 'Recipe',
			'joinTable' => 'products_recipes',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'recipe_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
