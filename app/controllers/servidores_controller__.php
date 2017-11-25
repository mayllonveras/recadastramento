<?php

class ServidoresController extends AppController {

    var $name = 'Servidores';
    var $helpers = array('Html', 'Ajax', 'Javascript');
    var $components = array('RequestHandler', 'Email', 'MathCaptcha');

	function entrar(){
		$this->Session->write('servidor', null);
        	if (!empty($this->data)) {
            		$this->Servidor->set($this->data);
            		$servidor = $this->Servidor->DadosServidor->find('first', array('conditions' =>
                        		array(
                            			'DadosServidor.MATRICULA_FUNCIONAL' => $this->data['Servidor']['matricula'],
                       			 )
                           	 )
           		 );
            		if (!$servidor) {
                		$this->Session->setFlash('Matrícula não encontrada, verifique se o número foi digitado corretamente.', 'flash_error');
                		$this->redirect(array('action' => 'index'));
           		 }
            		$servidor['DadosServidor']['CPF'] = $this->data['Servidor']['cpf'];
           	 	if ($servidor) {
                		$this->Session->write('servidor', $servidor);
               	 		$this->redirect(array('controller' => 'pages', 'action' => 'finalizado'));
           		 } else {
                		echo "Errou";
           	 	}
       		 }
	}


    function add() {
        if (!empty($this->data)) {
            $this->Servidor->create();
            if ($this->Servidor->save($this->data)) {
                $servidor = $this->Session->read('servidor');
                $servidor['Servidor']['id'] = $this->Servidor->id;
                $this->Session->write('servidor', $servidor);
                //$this->Session->setFlash(__('The servidor has been saved', true));
                $this->redirect(array('controller' => 'enderecos', 'action' => 'add'));
            } else {
                $this->Session->setFlash(__('Os dados não puderam ser salvos. Por favor, tente novamente.', true));
            }
        }
        $servidor = $this->Session->read('servidor');
        $servidorBD = $this->Servidor->find('first', array('conditions' =>
                    array(
                        'Servidor.matricula' => $servidor['DadosServidor']['MATRICULA_FUNCIONAL'],
                    )
                        )
        );
        
        if ($servidorBD)
            $this->redirect(array('controller' => 'enderecos', 'action' => 'add'));

        $estadocivis = $this->Servidor->Estadocivil->find('list');
        $cidades = $this->Servidor->Cidade->find('list');
        $estados = $this->Servidor->Cidade->Estado->find('list');
        $this->set(compact('estadocivis', 'cidades', 'estados', 'servidor'));
    }

    function encerrar() {
        $servidor = $this->Session->read('servidor');
        $this->data['Servidor']['id'] = $servidor['Servidor']['id'];
        $this->data['Servidor']['concluido'] = 1;
        $this->Servidor->save($this->data);
	$this->set('servidor', $servidor);
    }

    function listar_cidades() {
        if (!empty($this->data['Servidor']['estado'])) {
            $this->redirect(array('controller' => 'cidades', 'action' => 'listar', $this->data['Servidor']['estado']));
        }
    }

    function admin_index() {
        $this->Servidor->recursive = 0;
        $this->set('servidores', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid servidor', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('servidor', $this->Servidor->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Servidor->create();
            if ($this->Servidor->save($this->data)) {
                $this->Session->setFlash(__('The servidor has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The servidor could not be saved. Please, try again.', true));
            }
        }
        $estadocivis = $this->Servidor->Estadocivil->find('list');
        $cidades = $this->Servidor->Cidade->find('list');
        $this->set(compact('estadocivis', 'cidades'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid servidor', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Servidor->save($this->data)) {
                $this->Session->setFlash(__('The servidor has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The servidor could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Servidor->read(null, $id);
        }
        $estadocivis = $this->Servidor->Estadocivil->find('list');
        $cidades = $this->Servidor->Cidade->find('list');
        $this->set(compact('estadocivis', 'cidades'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for servidor', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Servidor->delete($id)) {
            $this->Session->setFlash(__('Servidor deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Servidor was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
