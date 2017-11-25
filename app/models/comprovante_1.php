<?php

class Comprovante extends AppModel {

    var $name = 'Comprovante';
    var $displayField = 'arquivo';
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
        'Servidor' => array(
            'className' => 'Servidor',
            'foreignKey' => 'Servidor_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    var $hasAndBelongsToMany = array(
        'Tipocomprovante' => array(
            'className' => 'Tipocomprovante',
            'joinTable' => 'comprovantes_tipocomprovantes',
            'foreignKey' => 'comprovante_id',
            'associationForeignKey' => 'tipocomprovante_id',
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
