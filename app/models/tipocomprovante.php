<?php
class Tipocomprovante extends AppModel {
	var $name = 'Tipocomprovante';
	var $displayField = 'tipo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Comprovante' => array(
			'className' => 'Comprovante',
			'joinTable' => 'comprovantes_tipocomprovantes',
			'foreignKey' => 'tipocomprovante_id',
			'associationForeignKey' => 'comprovante_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
