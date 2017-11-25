<?php

class EnderecosController extends AppController {

    var $name = 'Enderecos';
    var $helpers = array('Html', 'Ajax', 'Javascript');
    var $components = array('RequestHandler', 'Session');

    function index() {
        $this->Endereco->recursive = 0;
        $this->set('enderecos', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid endereco', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('endereco', $this->Endereco->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->Endereco->create();
            if ($this->Endereco->save($this->data)) {
                //$this->Session->setFlash(__('The endereco has been saved', true));
                $this->redirect(array('controller'=>'funcionais','action' => 'add'));
            } else {
                $this->Session->setFlash('O endereço não pôde ser salvo. Por favor, tente novamente.', 'flash_error');
            }
        }
        
        $servidor = $this->Session->read('servidor');
        $endereco = $this->Endereco->find('first', array('conditions' =>
                        array(
                            'Endereco.Servidor_id' => $servidor['Servidor']['id'],
                        )
                            )
            );
        if($endereco)
            $this->redirect(array('controller'=>'funcionais','action' => 'add'));
        $estados = $this->Endereco->Cidade->Estado->find('list');
        $this->set(compact('servidor', 'estados'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid endereco', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Endereco->save($this->data)) {
                $this->Session->setFlash(__('The endereco has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The endereco could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Endereco->read(null, $id);
        }
        $servidores = $this->Endereco->Servidor->find('list');
        $cidades = $this->Endereco->Cidade->find('list');
        $this->set(compact('servidores', 'cidades'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for endereco', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Endereco->delete($id)) {
            $this->Session->setFlash(__('Endereco deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Endereco was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }
    
    function listar_cidades() {
        if (!empty($this->data['Endereco']['estado'])) {
            $this->redirect(array('controller' => 'cidades', 'action' => 'listar', $this->data['Endereco']['estado']));
        }
    }

    function admin_index() {
        $this->Endereco->recursive = 0;
        $this->set('enderecos', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid endereco', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('endereco', $this->Endereco->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Endereco->create();
            if ($this->Endereco->save($this->data)) {
                $this->Session->setFlash(__('The endereco has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The endereco could not be saved. Please, try again.', true));
            }
        }
        $servidores = $this->Endereco->Servidor->find('list');
        $cidades = $this->Endereco->Cidade->find('list');
        $this->set(compact('servidores', 'cidades'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid endereco', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Endereco->save($this->data)) {
                $this->Session->setFlash(__('The endereco has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The endereco could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Endereco->read(null, $id);
        }
        $servidores = $this->Endereco->Servidor->find('list');
        $cidades = $this->Endereco->Cidade->find('list');
        $this->set(compact('servidores', 'cidades'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for endereco', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Endereco->delete($id)) {
            $this->Session->setFlash(__('Endereco deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Endereco was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
