<?php

class FuncionaisController extends AppController {

    var $name = 'Funcionais';

    function index() {
        $this->Funcional->recursive = 0;
        $this->set('funcionais', $this->paginate());
    }

    function add() {
        if (!$this->Session->read('servidor'))
            $this->redirect(array('controller' => 'servidores', 'action' => 'index'));
        if (!empty($this->data)) {
            $this->Funcional->create();
            $dados = $this->data;
            if ($this->Funcional->save($dados)) {
                if ($dados['Cedido']['cedido']) {
                    $dados['Cedido']['Funcional_id'] = $this->Funcional->id;
                    $this->Funcional->Cedido->create();
                    if(!$this->Funcional->Cedido->save($dados)) {
                        $this->Funcional->rollback();
                        $this->Session->setFlash(__('A informação não pôde ser salva. Por favor, tente novamente.', 'flash_error'));
                        return null;
                    }
                }
                $this->redirect(array('controller' => 'formacoes', 'action' => 'add'));
            } else {
                $this->Session->setFlash(__('A informação não pôde ser salva. Por favor, tente novamente.', 'flash_error'));
            }
        }
        $servidor = $this->Session->read('servidor');
        $funcionalBD = $this->Funcional->find('first', array('conditions' =>
                        array(
                            'Funcional.Servidor_id' => $servidor['Servidor']['id'],
                        )
                            )
            );
        if($funcionalBD)
            $this->redirect(array('controller' => 'formacoes', 'action' => 'add'));
        $setores = $this->Funcional->Setor->find('list',array('order'=>array('Setor.descricao')));
        $funcoes = $this->Funcional->Funcao->find('list');
        $cargos = $this->Funcional->Cargo->find('list');
        $regimeJuridico = $this->Funcional->Regimejuridico->find('first');
        $this->set(compact('servidor', 'setores', 'funcoes', 'cargos', 'regimeJuridico'));
    }

    function admin_index() {
        $this->Funcional->recursive = 0;
        $this->set('funcionais', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid funcional', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('funcional', $this->Funcional->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Funcional->create();
            if ($this->Funcional->save($this->data)) {
                $this->Session->setFlash(__('The funcional has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The funcional could not be saved. Please, try again.', true));
            }
        }
        $servidores = $this->Funcional->Servidor->find('list');
        $setores = $this->Funcional->Setor->find('list');
        $funcoes = $this->Funcional->Funcao->find('list');
        $cargos = $this->Funcional->Cargo->find('list');
        $regimejuridicos = $this->Funcional->Regimejuridico->find('list');
        $this->set(compact('servidores', 'setores', 'funcoes', 'cargos', 'regimejuridicos'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid funcional', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Funcional->save($this->data)) {
                $this->Session->setFlash(__('The funcional has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The funcional could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Funcional->read(null, $id);
        }
        $servidores = $this->Funcional->Servidor->find('list');
        $setores = $this->Funcional->Setor->find('list');
        $funcoes = $this->Funcional->Funcao->find('list');
        $cargos = $this->Funcional->Cargo->find('list');
        $regimejuridicos = $this->Funcional->Regimejuridico->find('list');
        $this->set(compact('servidores', 'setores', 'funcoes', 'cargos', 'regimejuridicos'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for funcional', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Funcional->delete($id)) {
            $this->Session->setFlash(__('Funcional deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Funcional was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
