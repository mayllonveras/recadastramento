<?php
class Estadocivil extends AppModel {
	var $name = 'Estadocivil';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Servidor' => array(
			'className' => 'Servidor',
			'foreignKey' => 'Estadocivil_id',
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
