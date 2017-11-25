<?php
class Setor extends AppModel {
	var $name = 'Setor';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Setor' => array(
			'className' => 'Setor',
			'foreignKey' => 'setor_vinculo',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
