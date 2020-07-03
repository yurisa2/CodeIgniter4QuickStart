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
use App\Models\ClienteModel;
use CodeIgniter\Controller;

class Login extends Controller
{

  public function index() {
    $session = \Config\Services::session(); // Inicia a session
    if($session->autenticado == 'true') return redirect()->to(base_url('public/automovel/listar'));

    echo view('login');
  }

  public function autentica() {
    $Cliente = new ClienteModel;

    $session = \Config\Services::session(); // Inicia a session
    if($session->autenticado == 'true') return redirect()->to(base_url('public/automovel/listar'));

    $login_data = $this->request->getPost(); // Pega os dados do formulário de login

    $email = $login_data['login']; // Pega email do formulário de login
    $senha_do_form = $login_data['senha']; // Pega senha do formulário de login

    $dados_banco = $Cliente->get_client($email); // Pesquisa o banco através do método que utiliza where usando o $email como parametro

    $senha_banco = $dados_banco[0]["TB_CLIENTE_SENHA"]; // Pega a senha do resultado da pesquisa

    if($senha_do_form == $senha_banco) {

      echo 'VOCE ESTA AUTENTICADO <a href=../automovel/listar> AUTOMOVEIS </a>';
      $session->set('autenticado', 'true');
      $session->set('usuario', $email);

      return redirect()->to(base_url('public/automovel/listar'));
    } else {

      echo 'USUARIO NAO ENCONTRADO';
      $session->set('autenticado', 'false');
    }
  }

  public function logoff() {
    $session = \Config\Services::session(); // Inicia a session
    $session->set('autenticado', 'false');

    $session->destroy();

    return redirect()->to(base_url('public/login/index'));
  }

  public function esqueci() {

    echo view('esqueci');

  }

  public function enviasenha() {
    $Cliente = new ClienteModel;

    $login_data = $this->request->getPost(); // Pega os dados do formulário de login

    $email_enviado = $login_data['login']; // Pega email do formulário de Esqueci

    $dados_banco = $Cliente->get_client($email_enviado); // Pesquisa o banco através do método que utiliza where usando o $email como parametro
    $senha_banco = $dados_banco[0]["TB_CLIENTE_SENHA"]; // Pega a senha do resultado da pesquisa


    $email = \Config\Services::email();

    $email->setFrom('locadora@sa2.com.br', 'PW3 - ETEC 187');
    $email->setTo($email_enviado);

    $email->setSubject('Senha do sistema de locadora');
    $email->setMessage('Sua senha é '.$senha_banco );

    $email->send();

    return redirect()->to(base_url('public/login/index'));
  }

}
