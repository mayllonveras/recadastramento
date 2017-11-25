<?php
class Nivelescolaridade extends AppModel {
	var $name = 'Nivelescolaridade';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Formacao' => array(
			'className' => 'Formacao',
			'foreignKey' => 'Nivelescolaridade_id',
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
