<?php
class CargosController extends AppController {

	var $name = 'Cargos';

	function index() {
		$this->Cargo->recursive = 0;
		$this->set('cargos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cargo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cargo', $this->Cargo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Cargo->create();
			if ($this->Cargo->save($this->data)) {
				$this->Session->setFlash(__('The cargo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cargo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cargo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cargo->save($this->data)) {
				$this->Session->setFlash(__('The cargo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cargo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cargo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cargo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cargo->delete($id)) {
			$this->Session->setFlash(__('Cargo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cargo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Cargo->recursive = 0;
		$this->set('cargos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cargo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cargo', $this->Cargo->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Cargo->create();
			if ($this->Cargo->save($this->data)) {
				$this->Session->setFlash(__('The cargo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cargo could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cargo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cargo->save($this->data)) {
				$this->Session->setFlash(__('The cargo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cargo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cargo->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cargo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cargo->delete($id)) {
			$this->Session->setFlash(__('Cargo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cargo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
