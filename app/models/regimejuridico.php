<?php
class Regimejuridico extends AppModel {
	var $name = 'Regimejuridico';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Funcional' => array(
			'className' => 'Funcional',
			'foreignKey' => 'Regimejuridico_id',
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
