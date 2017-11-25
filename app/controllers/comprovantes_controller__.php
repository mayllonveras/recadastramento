<?php
class ComprovantesController extends AppController {

	var $name = 'Comprovantes';
        var $helpers = array('Cropimage', 'Html', 'Javascript', 'Form', 'Session');
        var $components = array('JqImgcrop');

	function index() {
		$this->Comprovante->recursive = 0;
		$this->set('comprovantes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid comprovante', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comprovante', $this->Comprovante->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Comprovante->create();
			if ($this->Comprovante->save($this->data)) {
				$this->Session->setFlash(__('The comprovante has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comprovante could not be saved. Please, try again.', true));
			}
		}
		$servidores = $this->Comprovante->Servidor->find('list');
		$tipocomprovantes = $this->Comprovante->Tipocomprovante->find('list');
		$this->set(compact('servidores', 'tipocomprovantes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid comprovante', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comprovante->save($this->data)) {
				$this->Session->setFlash(__('The comprovante has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comprovante could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comprovante->read(null, $id);
		}
		$servidores = $this->Comprovante->Servidor->find('list');
		$tipocomprovantes = $this->Comprovante->Tipocomprovante->find('list');
		$this->set(compact('servidores', 'tipocomprovantes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for comprovante', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Comprovante->delete($id)) {
			$this->Session->setFlash(__('Comprovante deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Comprovante was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Comprovante->recursive = 0;
		$this->set('comprovantes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid comprovante', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comprovante', $this->Comprovante->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Comprovante->create();
			if ($this->Comprovante->save($this->data)) {
				$this->Session->setFlash(__('The comprovante has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comprovante could not be saved. Please, try again.', true));
			}
		}
		$servidores = $this->Comprovante->Servidor->find('list');
		$tipocomprovantes = $this->Comprovante->Tipocomprovante->find('list');
		$this->set(compact('servidores', 'tipocomprovantes'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid comprovante', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comprovante->save($this->data)) {
				$this->Session->setFlash(__('The comprovante has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comprovante could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comprovante->read(null, $id);
		}
		$servidores = $this->Comprovante->Servidor->find('list');
		$tipocomprovantes = $this->Comprovante->Tipocomprovante->find('list');
		$this->set(compact('servidores', 'tipocomprovantes'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for comprovante', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Comprovante->delete($id)) {
			$this->Session->setFlash(__('Comprovante deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Comprovante was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
