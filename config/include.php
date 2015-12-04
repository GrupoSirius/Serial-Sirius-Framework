<?php

/* include.php
 * Este script tem como objetivo carregar todos os arquivos que forem necessários
 * para o fluxo de execução do script
 * 
 * Serial Sirius Framework
 * @author: Gérley Adriano Miranda Cruz <gerleyadriano7@gmail.com>
 * @group:  Sirius Grupo de Pesquisa
 * @site:   sirius.etc.br
 * @version: 0.1 - 01/12/2015 18:25
 */


function __autoload($file) {
    include_once 'controller/AppController.php';
    include_once 'model/appmodel.php';
}
