<?php
class Estado extends AppModel {
	var $name = 'Estado';
	var $displayField = 'sigla';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'Estado_id',
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
