<?php
class TipocomprovantesController extends AppController {

	var $name = 'Tipocomprovantes';

	function index() {
		$this->Tipocomprovante->recursive = 0;
		$this->set('tipocomprovantes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipocomprovante', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipocomprovante', $this->Tipocomprovante->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipocomprovante->create();
			if ($this->Tipocomprovante->save($this->data)) {
				$this->Session->setFlash(__('The tipocomprovante has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipocomprovante could not be saved. Please, try again.', true));
			}
		}
		$comprovantes = $this->Tipocomprovante->Comprovante->find('list');
		$this->set(compact('comprovantes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipocomprovante', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipocomprovante->save($this->data)) {
				$this->Session->setFlash(__('The tipocomprovante has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipocomprovante could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipocomprovante->read(null, $id);
		}
		$comprovantes = $this->Tipocomprovante->Comprovante->find('list');
		$this->set(compact('comprovantes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipocomprovante', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipocomprovante->delete($id)) {
			$this->Session->setFlash(__('Tipocomprovante deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipocomprovante was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
