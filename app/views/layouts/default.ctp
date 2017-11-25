<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php __('Prefeitura de Parnaíba :: Recadastramento de Servidores Municipais'); ?>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array('cake.generic', 'formee-structure', 'formee-style', 'recadastramento', 'jquery.powertip'));
        echo $this->Html->script(array('formee.js'));

        echo $scripts_for_layout;
        ?>
    </head>
    <body>
        <div id="container" class ="container">
            <div id="header">
                <h1><?php echo 'Prefeitura de Parnaíba :: Recadastramento de Servidores Municipais'; ?></h1>
            </div>
            <div id="content">

                <?php echo $this->Session->flash(); ?>

                <?php echo $content_for_layout; ?>

            </div>
            <div id="footer">
                <div id="inf">
                    <h5>Problemas no seu cadastro? Entre em contato conosco: <?php echo $this->Html->link('Formulário', array('controller'=>'contatos','action'=>'add')); ?></h5>
                    <h5>Você também pode enviar um email para recadastramento@parnaiba.pi.gov.br</h5>
                </div>
                <div id="credits">
                    Prefeitura de Parnaíba</br>
                    Secretaria da Gestão</br>
                    Superintendência de Administração</br>
                    Recursos Humanos</br>
                    Coordenação de Informatização</br>
                    <?php
                    echo $this->Html->link(
                            $this->Html->image('cake.power.gif', array('alt' => __('CakePHP: the rapid development php framework', true), 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false)
                    );
                    ?>
                </div>
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>