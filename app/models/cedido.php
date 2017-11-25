<?php

class Cedido extends AppModel {

    var $name = 'Cedido';
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
        'Funcional' => array(
            'className' => 'Funcional',
            'foreignKey' => 'Funcional_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
