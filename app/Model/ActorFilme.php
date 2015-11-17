<?php
App::uses('AppModel', 'Model');
/**
 * ActorFilme Model
 *
 * @property Actor $Actor
 * @property Filme $Filme
 */
class ActorFilme extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'actor_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'filme_id' => array(
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
		'Actor' => array(
			'className' => 'Actor',
			'foreignKey' => 'actor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Filme' => array(
			'className' => 'Filme',
			'foreignKey' => 'filme_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
