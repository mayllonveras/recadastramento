<?php
class CedidosController extends AppController {

	var $name = 'Cedidos';

	function index() {
		$this->Cedido->recursive = 0;
		$this->set('cedidos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cedido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cedido', $this->Cedido->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Cedido->create();
			if ($this->Cedido->save($this->data)) {
				$this->Session->setFlash(__('The cedido has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cedido could not be saved. Please, try again.', true));
			}
		}
		$servidores = $this->Cedido->Servidor->find('list');
		$setores = $this->Cedido->Setor->find('list');
		$this->set(compact('servidores', 'setores'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cedido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cedido->save($this->data)) {
				$this->Session->setFlash(__('The cedido has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cedido could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cedido->read(null, $id);
		}
		$servidores = $this->Cedido->Servidor->find('list');
		$setores = $this->Cedido->Setor->find('list');
		$this->set(compact('servidores', 'setores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cedido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cedido->delete($id)) {
			$this->Session->setFlash(__('Cedido deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cedido was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Cedido->recursive = 0;
		$this->set('cedidos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cedido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cedido', $this->Cedido->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Cedido->create();
			if ($this->Cedido->save($this->data)) {
				$this->Session->setFlash(__('The cedido has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cedido could not be saved. Please, try again.', true));
			}
		}
		$servidores = $this->Cedido->Servidor->find('list');
		$setores = $this->Cedido->Setor->find('list');
		$this->set(compact('servidores', 'setores'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cedido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cedido->save($this->data)) {
				$this->Session->setFlash(__('The cedido has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cedido could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cedido->read(null, $id);
		}
		$servidores = $this->Cedido->Servidor->find('list');
		$setores = $this->Cedido->Setor->find('list');
		$this->set(compact('servidores', 'setores'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cedido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cedido->delete($id)) {
			$this->Session->setFlash(__('Cedido deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cedido was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
