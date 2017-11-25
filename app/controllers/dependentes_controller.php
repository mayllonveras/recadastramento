<?php
class DependentesController extends AppController {

	var $name = 'Dependentes';
        var $helpers = array('CakePtbr.Formatacao');
        
	function add() {
		if (!empty($this->data)) {
		    if($this->data['Dependente']['nome'] == ""){
                $this->redirect(array('controller' => 'Comprovantes', 'action' => 'add'));
            }else{
    			$this->Dependente->create();
    			if ($this->Dependente->save($this->data)) {
    				$this->Session->setFlash('Dependente adicionado com sucesso.', 'flash_success');
    				$this->redirect(array('action' => 'add'));
    			} else {
    				$this->Session->setFlash('O dependente não pôde ser salvo. Por favor, tente novamente.', 'flash_error');
    			}
			}
		}
		$servidor = $this->Session->read('servidor');
                $id = $servidor['Servidor']['id'];
                $dependentes = $this->Dependente->find('all', array('fields' => array('Dependente.id', 'Dependente.nome', 'Dependente.nascimento', 'Dependente.tipo'), 'conditions'=>array('Dependente.servidor_id'=>$id)));
                $this->set(compact('servidor', 'dependentes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Dependente inválido.', 'flash_error');
			$this->redirect(array('action'=>'add'));
		}
		if ($this->Dependente->delete($id)) {
			$this->Session->setFlash('Dependente removido', 'flash_success');
			$this->redirect(array('action'=>'add'));
		}
		$this->Session->setFlash('Dependente não pôde ser removido.', 'flash_error');
		$this->redirect(array('action' => 'add'));
	}
        
	function admin_index() {
		$this->Dependente->recursive = 0;
		$this->set('dependentes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid dependente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dependente', $this->Dependente->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Dependente->create();
			if ($this->Dependente->save($this->data)) {
				$this->Session->setFlash(__('The dependente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependente could not be saved. Please, try again.', true));
			}
		}
		$servidores = $this->Dependente->Servidor->find('list');
		$this->set(compact('servidores'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dependente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dependente->save($this->data)) {
				$this->Session->setFlash(__('The dependente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dependente->read(null, $id);
		}
		$servidores = $this->Dependente->Servidor->find('list');
		$this->set(compact('servidores'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dependente', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dependente->delete($id)) {
			$this->Session->setFlash(__('Dependente deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Dependente was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
