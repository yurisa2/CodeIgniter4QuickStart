<?php
/**
 * Controller Exemplo PW3
 *
 * @category   Controller CodeIgniter4
 * @package    PW3
 * @author     @yurisa2 <yuri@sa2.com.br>
 * @author     Gabriel da Silva 
 * @author     Daniel
 * @author     Luigi
 * @author     Leandro
 * @author     Valérya
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */



namespace App\Controllers;

use App\Models\FuncionarioModel;
use CodeIgniter\Controller;

class funcionario extends Controller
{
    public function listar()
    {
        $modelo = new FuncionarioModel;

        $data['funcionario'] = $modelo->findAll();

        echo view('funcionario/index', $data);
    }

    public function form_create() {

      echo view('funcionario/form_create');

    }

    public function form_update($id) {
      $modelo = new FuncionarioModel;

      $data['funcionario'] = $modelo->find($id);

      echo view('funcionario/form_update', $data);
    }

    public function create_funcionario() {
      $modelo = new FuncionarioModel;

      $data = $this->request->getPost();

      $modelo->insert($data);
    }

    public function update_funcionario() {
      $modelo = new FuncionarioModel;

      $data = $this->request->getPost();
      $id = $data['TB_FUNCIONARIO_ID'];

      $modelo->update($id,$data);
    }

    public function delete_funcionario($id) {
      $modelo = new FuncionarioModel;
      $modelo->delete($id);
    }

}