<?php
/* Comprovante Test cases generated on: 2013-02-25 12:18:17 : 1361791097*/
App::import('Model', 'Comprovante');

class ComprovanteTestCase extends CakeTestCase {
	var $fixtures = array('app.comprovante', 'app.servidor', 'app.estadocivil', 'app.cidade', 'app.estado', 'app.endereco', 'app.dados_servidor', 'app.tipocomprovante', 'app.comprovantes_tipocomprovante');

	function startTest() {
		$this->Comprovante =& ClassRegistry::init('Comprovante');
	}

	function endTest() {
		unset($this->Comprovante);
		ClassRegistry::flush();
	}

}
