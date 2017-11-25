<?php

class UseresController extends AppController {

    var $name = 'Useres';

    public function login() {
        
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    function add() {
        if (!empty($this->data)) {
            $this->User->create();
            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('Usuario Adicionado', 'flash_success'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('O usuário não pôde ser salvo. Por favor', true));
            }
        }
    }

}
