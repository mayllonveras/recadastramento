<?php
class RegimejuridicosController extends AppController {

	var $name = 'Regimejuridicos';

	function index() {
		$this->Regimejuridico->recursive = 0;
		$this->set('regimejuridicos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid regimejuridico', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('regimejuridico', $this->Regimejuridico->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Regimejuridico->create();
			if ($this->Regimejuridico->save($this->data)) {
				$this->Session->setFlash(__('The regimejuridico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regimejuridico could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid regimejuridico', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Regimejuridico->save($this->data)) {
				$this->Session->setFlash(__('The regimejuridico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regimejuridico could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Regimejuridico->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for regimejuridico', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Regimejuridico->delete($id)) {
			$this->Session->setFlash(__('Regimejuridico deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Regimejuridico was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Regimejuridico->recursive = 0;
		$this->set('regimejuridicos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid regimejuridico', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('regimejuridico', $this->Regimejuridico->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Regimejuridico->create();
			if ($this->Regimejuridico->save($this->data)) {
				$this->Session->setFlash(__('The regimejuridico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regimejuridico could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid regimejuridico', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Regimejuridico->save($this->data)) {
				$this->Session->setFlash(__('The regimejuridico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The regimejuridico could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Regimejuridico->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for regimejuridico', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Regimejuridico->delete($id)) {
			$this->Session->setFlash(__('Regimejuridico deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Regimejuridico was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
