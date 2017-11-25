<?php
class Funcional extends AppModel {
	var $name = 'Funcional';
	var $displayField = 'Servidor_id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Servidor' => array(
			'className' => 'Servidor',
			'foreignKey' => 'Servidor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Setor' => array(
			'className' => 'Setor',
			'foreignKey' => 'Setor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Funcao' => array(
			'className' => 'Funcao',
			'foreignKey' => 'Funcao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'Cargo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Regimejuridico' => array(
			'className' => 'Regimejuridico',
			'foreignKey' => 'Regimejuridico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        var $hasOne = array(
		'Cedido' => array(
			'className' => 'Cedido',
			'foreignKey' => 'Funcional_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
