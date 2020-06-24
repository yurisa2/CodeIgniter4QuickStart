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
        foreach ($data['funcionario'] as $key => $value) { // Vai passar (iterar) todas as posições do array
          $id = $data['funcionario'][$key]['TB_FUNCIONARIO_ID']; // Pega o ID do passo/registro atual (linha)
          $data['funcionario'][$key]['TB_FUNCIONARIO_ID'] = "ID: ".$id;
          // Escreve links
          $link_alterar = "<a href=form_update/$id>Alterar Registro</a>";
          $link_delete = "<a href=delete_cargo/$id>Deletar Registro</a>";

          // Cria itens no array para fazer a coluna ok
          $data['funcionario'][$key]['Link_Alterar'] = $link_alterar;
          $data['funcionario'][$key]['Link_Deletar'] = $link_delete;
        }

        echo view('menu');
        echo view('funcionario/index', $data);
    }

    public function form_create() {
      echo view('menu');
      echo view('funcionario/form_create');

    }

    public function form_update($id) {
      $modelo = new FuncionarioModel;

      $data['funcionario'] = $modelo->find($id);
      echo view('menu');
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
