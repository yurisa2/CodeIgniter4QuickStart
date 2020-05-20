<?php
/**
 * Controller Exemplo PW3
 *
 * @category   Controller CodeIgniter4
 * @package    PW3
 * @author     Lucas Magalhães Gusmão (de ultima hora, mas era da Deise)
 * @author     Yuri Sá (Adição de colunas)
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */



namespace App\Controllers;

use App\Models\CargoModel;
use CodeIgniter\Controller;

class Cargo extends Controller
{
    public function listar()
    {
        $modelo = new CargoModel;

        $data['cargo'] = $modelo->findAll();

        foreach ($data['cargo'] as $key => $value) { // Vai passar (iterar) todas as posições do array
          $id = $data['cargo'][$key]['TB_CARGO_ID']; // Pega o ID do passo/registro atual (linha)

          // Escreve links
          $link_alterar = "<a href=form_update/$id>Alterar Registro</a>";
          $link_delete = "<a href=delete_cargo/$id>Deletar Registro</a>";

          // Cria itens no array para fazer a coluna ok
          $data['cargo'][$key]['Link_Alterar'] = $link_alterar;
          $data['cargo'][$key]['Link_Deletar'] = $link_delete;
        }

        echo view('cargo/listar', $data);
    }

    public function form_create() {

        echo view('cargo/form_create');

    }

    public function create_cargo() {
        $modelo = new CargoModel;

        $data = $this->request->getPost();

        $modelo->insert($data);
    }

    public function form_update($id) {
        $modelo = new CargoModel;

        $data['cargo'] = $modelo->find($id);

        echo view('cargo/form_update', $data);
    }

    public function update_cargo() {
        $modelo = new CargoModel;

        $data = $this->request->getPost();
        $id = $data['TB_CARGO_ID'];

        $modelo->update($id,$data);
      }

    public function delete_cargo($id) {
        $modelo = new CargoModel;
        $modelo->delete($id);
    }
}
