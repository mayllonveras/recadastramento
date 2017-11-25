<?php
class Dependente extends AppModel {
	var $name = 'Dependente';
	var $displayField = 'nome';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Servidor' => array(
			'className' => 'Servidor',
			'foreignKey' => 'servidor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
