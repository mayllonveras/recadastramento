<?php

class Contact extends AppModel {

    var $name = 'Contact';
    var $useTable = false;
    var $_schema = array(
        'name' => array('type' => 'string', 'length' => 100),
        'email' => array('type' => 'string', 'length' => 255),
        'comments' => array('type' => 'text')
    );
    var $validate = array(
        'name' => array(
            'rule' => array('minLength', 1),
            'message' => 'Please enter a name so the Geek know what to call you!'),
        'email' => array(
            'rule' => 'email',
            'message' => 'Please enter an email address so the Geek knows how to reach you.'),
        'details' => array(
            'rule' => array('minLength', 1),
            'message' => 'Don\'t forget to enter some comments.')
    );

}

?>