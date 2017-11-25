<?php
class EstadocivisController extends AppController {

	var $name = 'Estadocivis';

	function index() {
		$this->Estadocivil->recursive = 0;
		$this->set('estadocivis', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid estadocivil', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estadocivil', $this->Estadocivil->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Estadocivil->create();
			if ($this->Estadocivil->save($this->data)) {
				$this->Session->setFlash(__('The estadocivil has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadocivil could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid estadocivil', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estadocivil->save($this->data)) {
				$this->Session->setFlash(__('The estadocivil has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadocivil could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Estadocivil->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for estadocivil', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Estadocivil->delete($id)) {
			$this->Session->setFlash(__('Estadocivil deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Estadocivil was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Estadocivil->recursive = 0;
		$this->set('estadocivis', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid estadocivil', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estadocivil', $this->Estadocivil->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Estadocivil->create();
			if ($this->Estadocivil->save($this->data)) {
				$this->Session->setFlash(__('The estadocivil has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadocivil could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid estadocivil', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estadocivil->save($this->data)) {
				$this->Session->setFlash(__('The estadocivil has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadocivil could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Estadocivil->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for estadocivil', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Estadocivil->delete($id)) {
			$this->Session->setFlash(__('Estadocivil deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Estadocivil was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
