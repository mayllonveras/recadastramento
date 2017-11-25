<?php
class Formacao extends AppModel {
	var $name = 'Formacao';
	var $displayField = 'curso';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Servidor' => array(
			'className' => 'Servidor',
			'foreignKey' => 'Servidor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nivelescolaridade' => array(
			'className' => 'Nivelescolaridade',
			'foreignKey' => 'Nivelescolaridade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
