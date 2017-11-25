<?php
class DadosServidor extends AppModel {
	var $name = 'DadosServidor';
	var $primaryKey = 'MATRICULA_FUNCIONAL';
	var $displayField = 'NOME_SERVIDOR';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'Servidor' => array(
			'className' => 'Servidor',
			'foreignKey' => 'matricula',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
