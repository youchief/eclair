<?php
App::uses('AppModel', 'Model');
CakePlugin::load('Uploader');
/**
 * News Model
 *
 */
class News extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
        
        public $actsAs = array(
            'Translate' => array(
                'title' => 'titleTranslation',
                'description' => 'descriptionTranslation',
                
            ),
            'Uploader.Attachment' => array(
                // Do not copy all these settings, it's merely an example

                'image' => array(
                    'tempDir' => TMP,
                    'transforms' => array(
                        'imageSmall' => array(
                            'class' => 'crop',
                            'self' => true,
                            'width' => 1400,
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
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'start' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'end' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
