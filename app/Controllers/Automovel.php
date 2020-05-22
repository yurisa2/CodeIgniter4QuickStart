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

use App\Models\AutoModel;
use CodeIgniter\Controller;

class Automovel extends Controller
{
    public function listar()
    {
        $modelo = new AutoModel;

        $data['automovel'] = $modelo->findAll();

         foreach ($data['automovel'] as $key => $value) { 
         $id = $data['automovel'][$key]['TB_AUTOMOVEL_ID'];
          $data['automovel'][$key]['TB_AUTOMOVEL_ID'] = "ID: ".$id;
         
         
          $link_alterar = "<a href=form_update/$id>Alterar Registro</a>";
          $link_delete = "<a href=delete_automovel/$id>Deletar Registro</a>";

         
          $data['automovel'][$key]['Link_Alterar'] = $link_alterar;
          $data['automovel'][$key]['Link_Deletar'] = $link_delete;
        }

        echo view('automovel/index', $data);
    }

    public function form_create() {

      echo view('automovel/form_create');

    }

    public function form_update($id) {
      $modelo = new AutoModel;

      $data['automovel'] = $modelo->find($id);

      echo view('automovel/form_update', $data);
    }

    public function create_automovel() {
      $modelo = new AutoModel;

      $data = $this->request->getPost();

      $modelo->insert($data);
    }

    public function update_automovel() {
      $modelo = new AutoModel;

      $data = $this->request->getPost();
      $id = $data['TB_AUTOMOVEL_ID'];

      $modelo->update($id,$data);
    }

    public function delete_automovel($id) {
      $modelo = new AutoModel;
      $modelo->delete($id);
    }

}
