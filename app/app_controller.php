<?php

class AppController extends Controller {

    public $components = array('Session', 'Cookie', 'Auth');

    public function beforeFilter() {

        // Model de usuários
        $this->Auth->userModel = 'user';

        // Campos de usuário e senha
        $this->Auth->fields = array(
            'username' => 'username',
            'password' => 'password'
        );

        // Action da tela de login
        $this->Auth->loginAction = array(
            'admin' => false,
            'controller' => 'useres',
            'action' => 'login'
        );

        // Action da tela após o login (com sucesso)
        $this->Auth->loginRedirect = array(
            'admin' => true,
            'controller' => 'servidores',
            'action' => 'admin_index'
        );

        // Action para redirecionamento após o logout
        $this->Auth->logoutRedirect = array(
            'admin' => false,
            'controller' => 'servidores',
            'action' => 'index'
        );

        // Mensagens de erro
        $this->Auth->loginError = __('Usuário e/ou senha incorreto(s)', true);
        $this->Auth->authError = __('Você precisa fazer login para acessar esta página', true);
        if (!isset($this->params['admin']) || !$this->params['admin'])
            $this->Auth->allow('*');
        if (
                !$this->Session->read('servidor')
                && (!($this->params['controller'] == 'servidores') || !($this->params['action'] == 'entrar'))
                && (!isset($this->params['admin']) || !$this->params['admin'])
                && (!($this->params['controller'] == 'useres') || !($this->params['action'] == 'login'))
                && (!($this->params['controller'] == 'contatos') || !($this->params['action'] == 'add'))
        ) {
           $this->redirect(array('controller' => 'servidores', 'action' => 'entrar'));
        }

        $servidor = $this->Session->read('servidor');

        if (!($this->name == 'Servidores' && $this->action == 'encerrar')) {
            if (isset($_SESSION['servidor']['Servidor'])) {
                if ($_SESSION['servidor']['Servidor']['concluido'] == 1) {
                    $this->Session->setFlash('ATENÇÃO: Seu cadastro já foi realizado e finalizado. Qualquer detalhe adicional deve ser tratado diretamente na Diretoria de Recursos Humanos.', 'flash_warning');
                    $_SESSION['servidor'] = null;
                    $this->redirect(array('controller'=>'servidores','action' => 'entrar'));
                }
            }
        }
    }

    function afterFilter() {
        if ($this->name == 'Servidores' && $this->action == 'encerrar') {
            if (isset($_SESSION['servidor'])) {
                $_SESSION['servidor'] = null;
            }
        }
    }

}
