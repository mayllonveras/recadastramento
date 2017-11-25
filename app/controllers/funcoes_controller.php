<?php
class FuncoesController extends AppController {

	var $name = 'Funcoes';

	function index() {
		$this->Funcao->recursive = 0;
		$this->set('funcoes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid funcao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('funcao', $this->Funcao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Funcao->create();
			if ($this->Funcao->save($this->data)) {
				$this->Session->setFlash(__('The funcao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid funcao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Funcao->save($this->data)) {
				$this->Session->setFlash(__('The funcao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Funcao->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for funcao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Funcao->delete($id)) {
			$this->Session->setFlash(__('Funcao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Funcao was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Funcao->recursive = 0;
		$this->set('funcoes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid funcao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('funcao', $this->Funcao->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Funcao->create();
			if ($this->Funcao->save($this->data)) {
				$this->Session->setFlash(__('The funcao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid funcao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Funcao->save($this->data)) {
				$this->Session->setFlash(__('The funcao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Funcao->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for funcao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Funcao->delete($id)) {
			$this->Session->setFlash(__('Funcao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Funcao was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
