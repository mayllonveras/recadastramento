<?php
class NivelescolaridadesController extends AppController {

	var $name = 'Nivelescolaridades';

	function index() {
		$this->Nivelescolaridade->recursive = 0;
		$this->set('nivelescolaridades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nivelescolaridade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nivelescolaridade', $this->Nivelescolaridade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Nivelescolaridade->create();
			if ($this->Nivelescolaridade->save($this->data)) {
				$this->Session->setFlash(__('The nivelescolaridade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nivelescolaridade could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid nivelescolaridade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nivelescolaridade->save($this->data)) {
				$this->Session->setFlash(__('The nivelescolaridade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nivelescolaridade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nivelescolaridade->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for nivelescolaridade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nivelescolaridade->delete($id)) {
			$this->Session->setFlash(__('Nivelescolaridade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Nivelescolaridade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Nivelescolaridade->recursive = 0;
		$this->set('nivelescolaridades', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nivelescolaridade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nivelescolaridade', $this->Nivelescolaridade->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Nivelescolaridade->create();
			if ($this->Nivelescolaridade->save($this->data)) {
				$this->Session->setFlash(__('The nivelescolaridade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nivelescolaridade could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid nivelescolaridade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nivelescolaridade->save($this->data)) {
				$this->Session->setFlash(__('The nivelescolaridade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nivelescolaridade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nivelescolaridade->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for nivelescolaridade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nivelescolaridade->delete($id)) {
			$this->Session->setFlash(__('Nivelescolaridade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Nivelescolaridade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
