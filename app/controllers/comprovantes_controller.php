<?php

class ComprovantesController extends AppController {

    var $name = 'Comprovantes';
    var $helpers = array('Cropimage', 'Html', 'Javascript', 'Form', 'Session');
    var $components = array('JqImgcrop');

    function createimage_step2() {
        
        if (empty($this->data['Comprovante']['arquivo']['name'])) {
            $this->Session->setFlash('Selecione uma imagem.','flash_error');
            $this->redirect(array('action' => 'add'));
        } else {
            if (array_shift(explode('/', $this->data['Comprovante']['arquivo']['type'])) != 'image') {
                $this->Session->setFlash('Aceitamos apenas imagens.', 'flash_error');
                $this->redirect(array('action' => 'add'));
            }
        }
        
        if (empty($this->data['Tipocomprovante']['Tipocomprovante'])) {
            $this->Session->setFlash('Por favor. Selecione no mínimo um tipo de documento', 'flash_warning');
            $this->redirect(array('action' => 'add'));
        }
        
        if (!empty($this->data)) {
            $servidor = $this->Session->read('servidor');
            $up = $this->JqImgcrop->uploadImage($this->data['Comprovante']['arquivo'], '/img/documentos/', 'doc_');
            $path = pathinfo($up['imagePath']);
            $local = pathinfo($_SERVER['SCRIPT_NAME']);
            $this->data['Comprovante']['status'] = 'enviado';
            $this->data['Comprovante']['arquivo'] = '';
            $this->data['Comprovante']['servidor_id'] = $servidor['Servidor']['id'];
            $this->Comprovante->create();
        
            if ($this->Comprovante->save($this->data)) {
                $newName = strval($servidor['Servidor']['id']) . '-' . strval(implode('-', $this->data['Tipocomprovante']['Tipocomprovante'])) . '(' . $this->Comprovante->id . ').' . $path['extension'];
                rename($_SERVER['DOCUMENT_ROOT'] . $local['dirname'] . $up['imagePath'], $_SERVER['DOCUMENT_ROOT'] . $local['dirname'] . $path['dirname'] . '/' . $newName);
                $this->data['Comprovante']['arquivo'] = $newName;
                $this->Comprovante->save($this->data);
                $this->Session->setFlash('O Comprovante foi salvo com sucesso.', 'flash_success');
                $this->redirect(array('action' => 'add'));
            } else {
                $this->Session->setFlash('O Comprovante não pôde ser salvo. Por favor, tente novamente.', 'flash_error');
                $this->redirect(array('action' => 'add'));
            }
        }
    }

    function add() {
        $servidor = $this->Session->read('servidor');
        $comprovantes = $this->Comprovante->find('all', array('conditions' => array('Comprovante.Servidor_id' => $servidor['Servidor']['id'])));
        $servidor = $this->Session->read('servidor');
        $tipocomprovantes = $this->Comprovante->Tipocomprovante->find('list');
        $this->set(compact('servidor', 'tipocomprovantes', 'comprovantes'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash('ID inválido para comprovante', 'flash_error');
            $this->redirect(array('action' => 'add'));
        }
        $comprovante = $this->Comprovante->read(null, $id);
        if ($this->Comprovante->delete($id)) {
            $local = pathinfo($_SERVER['SCRIPT_NAME']);
            $path = $_SERVER['DOCUMENT_ROOT'] . $local['dirname'] . '/img/documentos/' . $comprovante['Comprovante']['arquivo'];
            if (file_exists($path))
                unlink($path);
            $this->Session->setFlash('Comprovante excluído', 'flash_success');
            $this->redirect(array('action' => 'add'));
        }
        $this->Session->setFlash('Comprovante não pôde ser excluído.', 'flash_error');
        $this->redirect(array('action' => 'add'));
    }

    function admin_index() {
        $this->Comprovante->recursive = 0;
        $this->set('comprovantes', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid comprovante', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('comprovante', $this->Comprovante->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Comprovante->create();
            if ($this->Comprovante->save($this->data)) {
                $this->Session->setFlash(__('The comprovante has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The comprovante could not be saved. Please, try again.', true));
            }
        }
        $servidores = $this->Comprovante->Servidor->find('list');
        $tipocomprovantes = $this->Comprovante->Tipocomprovante->find('list');
        $this->set(compact('servidores', 'tipocomprovantes'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid comprovante', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Comprovante->save($this->data)) {
                $this->Session->setFlash(__('The comprovante has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The comprovante could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Comprovante->read(null, $id);
        }
        $servidores = $this->Comprovante->Servidor->find('list');
        $tipocomprovantes = $this->Comprovante->Tipocomprovante->find('list');
        $this->set(compact('servidores', 'tipocomprovantes'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for comprovante', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Comprovante->delete($id)) {
            $this->Session->setFlash(__('Comprovante deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Comprovante was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}

