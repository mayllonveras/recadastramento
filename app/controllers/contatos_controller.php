<?php
class ContatosController extends AppController {

	var $name = 'Contatos';




	function add() {
		if (!empty($this->data)) {
			$this->Contato->create();
			if ($this->Contato->save($this->data)) {
                                $nome = $this->data['Contato']['nome'];
                                $email = $this->data['Contato']['email'];
                                mail('recadastramento@parnaiba.pi.gov.br',"Mensagem de $nome",$this->data['Contato']['descricao'], "From: $nome <$email>"); 
				$this->Session->setFlash('As informações foram armazenadas com sucesso. Aguarde nosso contato.', 'flash_success');
				$this->redirect(array('controller'=>'servidores','action' => 'index'));
			} else {
				$this->Session->setFlash('A informação não pôde ser salva. Por favor, tente novamente.', 'flash_error');
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contato', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('The contato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contato could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contato->read(null, $id);
		}
	}

	function admin_index() {
		$this->Contato->recursive = 0;
		$this->set('contatos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contato', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contato', $this->Contato->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Contato->create();
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('The contato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contato could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contato', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('The contato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contato could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contato->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contato', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contato->delete($id)) {
			$this->Session->setFlash(__('Contato deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contato was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
