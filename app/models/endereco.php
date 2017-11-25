<?php
class Endereco extends AppModel {
	var $name = 'Endereco';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Servidor' => array(
			'className' => 'Servidor',
			'foreignKey' => 'Servidor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'Cidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
