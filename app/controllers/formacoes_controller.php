<?php

class FormacoesController extends AppController {

    var $name = 'Formacoes';

    function add() {
        if (!empty($this->data)) {
            if($this->data['Formacao']['curso'] == "" and $this->data['Formacao']['instituicao'] == ""){
                $this->redirect(array('controller' => 'Dependentes', 'action' => 'add'));
            }
            if($this->data['Formacao']['curso'] == ""){
                $this->Session->setFlash('Por favor, informe o curso.', 'flash_error');
                
            }elseif($this->data['Formacao']['instituicao'] == ""){
                $this->Session->setFlash('Por favor, informe a instituição.', 'flash_error');
                
            }else{
                $this->Formacao->create();
                $this->data['Formacao']['conclusao'] = $this->data['Formacao']['conclusao']['year'];
                if ($this->Formacao->save($this->data)) {
                    $this->Session->setFlash('Formação adicionada.', 'flash_success');
                    $this->redirect(array('action' => 'add'));
                } else {
                    $this->Session->setFlash('A Formação não pôde ser salva. Por favor, tente novamente.', 'flash_error');
                }
            }
        }
        $servidor = $this->Session->read('servidor');
        $id = $servidor['Servidor']['id'];
        $formacoes = $this->Formacao->find('all', array('order' => array('conclusao' => 'desc'), 'fields' => array('Formacao.id', 'Formacao.Nivelescolaridade_id', 'Formacao.curso', 'Formacao.instituicao', 'Formacao.conclusao'), 'conditions' => array('Formacao.servidor_id' => $id)));
        $nivelescolaridades = $this->Formacao->Nivelescolaridade->find('list');
        $this->set(compact('servidor', 'nivelescolaridades', 'formacoes'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash('Formação com identificador inválido', 'flash_error');
            $this->redirect(array('action' => 'add'));
        }
        if ($this->Formacao->delete($id)) {
            $this->Session->setFlash('Formação excluída', 'flash_success');
            $this->redirect(array('action' => 'add'));
        }
        $this->Session->setFlash('A formação não pôde ser excluída', 'flash_error');
        $this->redirect(array('action' => 'add'));
    }

    function admin_index() {
        $this->Formacao->recursive = 0;
        $this->set('formacoes', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid formacao', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('formacao', $this->Formacao->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Formacao->create();
            if ($this->Formacao->save($this->data)) {
                $this->Session->setFlash(__('The formacao has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The formacao could not be saved. Please, try again.', true));
            }
        }
        $servidores = $this->Formacao->Servidor->find('list');
        $nivelescolaridades = $this->Formacao->Nivelescolaridade->find('list');
        $this->set(compact('servidores', 'nivelescolaridades'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid formacao', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Formacao->save($this->data)) {
                $this->Session->setFlash(__('The formacao has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The formacao could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Formacao->read(null, $id);
        }
        $servidores = $this->Formacao->Servidor->find('list');
        $nivelescolaridades = $this->Formacao->Nivelescolaridade->find('list');
        $this->set(compact('servidores', 'nivelescolaridades'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for formacao', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Formacao->delete($id)) {
            $this->Session->setFlash(__('Formacao deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Formacao was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
