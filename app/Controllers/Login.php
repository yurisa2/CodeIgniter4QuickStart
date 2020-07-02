<?php
/**
 * Controller Exemplo PW3
 *
 * @category   Controller CodeIgniter4
 * @package    PW3
 * @author     @yurisa2 <yuri@sa2.com.br>
 * @author     Another Author <another@example.com>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */



namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{

  public function index() {
 
    echo view('login');

  }

  public function autentica() {
    $session = \Config\Services::session();


    $login_data = $this->request->getPost();

    if($login_data['login'] == 'yurisa2' && $login_data['senha'] == 123456) {

      echo 'VOCE ESTA AUTENTICADO <a href=../automovel/listar> AUTOMOVEIS </a>';
      $session->set('autenticado', 'true');
    } else {

      echo 'USUARIO NAO ENCONTRADO';
      $session->set('autenticado', 'false');
    }

  }

}
