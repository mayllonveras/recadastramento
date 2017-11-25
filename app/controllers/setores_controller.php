<?php
class SetoresController extends AppController {

	var $name = 'Setores';

	function index() {
		$this->Setor->recursive = 0;
		$this->set('setores', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid setor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('setor', $this->Setor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Setor->create();
			if ($this->Setor->save($this->data)) {
				$this->Session->setFlash(__('The setor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setor could not be saved. Please, try again.', true));
			}
		}
		$setores = $this->Setor->Setor->find('list');
		$this->set(compact('setores'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid setor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Setor->save($this->data)) {
				$this->Session->setFlash(__('The setor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Setor->read(null, $id);
		}
		$setores = $this->Setor->Setor->find('list');
		$this->set(compact('setores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for setor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Setor->delete($id)) {
			$this->Session->setFlash(__('Setor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Setor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Setor->recursive = 0;
		$this->set('setores', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid setor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('setor', $this->Setor->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Setor->create();
			if ($this->Setor->save($this->data)) {
				$this->Session->setFlash(__('The setor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setor could not be saved. Please, try again.', true));
			}
		}
		$setores = $this->Setor->Setor->find('list');
		$this->set(compact('setores'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid setor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Setor->save($this->data)) {
				$this->Session->setFlash(__('The setor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Setor->read(null, $id);
		}
		$setores = $this->Setor->Setor->find('list');
		$this->set(compact('setores'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for setor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Setor->delete($id)) {
			$this->Session->setFlash(__('Setor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Setor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
