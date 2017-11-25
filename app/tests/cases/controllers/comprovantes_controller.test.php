<?php
/* Comprovantes Test cases generated on: 2013-02-25 12:20:46 : 1361791246*/
App::import('Controller', 'Comprovantes');

class TestComprovantesController extends ComprovantesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ComprovantesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.comprovante', 'app.servidor', 'app.estadocivil', 'app.cidade', 'app.estado', 'app.endereco', 'app.dados_servidor', 'app.tipocomprovante', 'app.comprovantes_tipocomprovante');

	function startTest() {
		$this->Comprovantes =& new TestComprovantesController();
		$this->Comprovantes->constructClasses();
	}

	function endTest() {
		unset($this->Comprovantes);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
