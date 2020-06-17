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
use App\Models\ModelMarca; // Para poder usar a tabela tb_marca aqui tbm
use CodeIgniter\Controller;

class Automovel extends Controller
{

    public function confirma($id, $acao) {


      $modelo = new AutoModel;


      if($acao == 'del') {
        $data['automovel'] = $modelo->find($id);
        $data['destino'] =  "automovel/delete_automovel/".$id;

        $data['titulo'] = "Confirma delete";
        $data['msg'] = "Tem certeza que deseja deletar " . $data['automovel']['TB_AUTOMOVEL_NOME'];
        $data['msg'] .= "<br> Esta ação nao pode ser desfeita";


      } else {
        $data['automovel'] = $this->request->getPost();

        // var_dump($data['automovel']);

        $data['destino'] =   'automovel/update_automovel';

        $data['titulo'] = "Confirma update";
        $data['msg'] = "Tem certeza que deseja alterar " . $data['automovel']['TB_AUTOMOVEL_NOME'];
        $data['msg'] .= "<br> Esta ação nao pode ser desfeita";




      }


      echo view('geral/confirmacao', $data);
    }

    public function listar()
    {
        $modelo = new AutoModel;

        // $data['automovel'] = $modelo->findAll(); // Select simples
        $data['automovel'] = $modelo->tb_auto_completo(); // Método criado, com inner join

        $data['atual'] = 'Listar Automoveis'; // Label do menu


         foreach ($data['automovel'] as $key => $value) {
         $id = $data['automovel'][$key]['TB_AUTOMOVEL_ID'];
          // $data['automovel'][$key]['TB_AUTOMOVEL_ID'] = "ID: ".$id; // Adiciona ID na frente do campo TB_AUTOMOVEL_ID


          $link_alterar = "<a href=form_update/$id>Alterar Registro</a>";
          $link_delete = "<a href=confirma/$id/del>Deletar Registro</a>";

          unset($data['automovel'][$key]['TB_MARCA_ID']); // remove FK (By Luigi)
          unset($data['automovel'][$key]['TB_MODELO_ID']); // remove outra FK

          unset($data['automovel'][$key]['TB_AUTOMOVEL_ID']); // Temporario

          $data['automovel'][$key]['Link_Alterar'] = $link_alterar;
          $data['automovel'][$key]['Link_Deletar'] = $link_delete;
        }

        $data['title'] = "Listar Automoveis";

        // echo view('menu', $data);
        echo view('automovel/index', $data);
    }

    public function form_create() {
      $data['atual'] = 'Criar Automovel'; // MANDEI O LABEL DO MENU

      $modelo_marca = new ModelMarca; // Peguei a tabela de MARCAS


      $data['marca'] = $modelo_marca->findAll(); // Joguei TODOS os valores num array


      $array_novo = array(); // Array do dropdown ID da marca => NOME DA MARCA
      // conforme doc: https://codeigniter4.github.io/userguide/helpers/form_helper.html#form_dropdown

      // Transformar array vindo do findAll() no formato aceito pelo dropdown
      foreach ($data['marca'] as $key => $value) {
        $array_novo[$value['TB_MARCA_ID']] = $value['TB_MARCA_NOME'];
        // Cada registro de MARCA, vira uma linha no array, cuja a chave é TB_MARCA_ID e o valor é TB_MARCA_NOME
      }

      $data['marca'] = $array_novo; // Aqui eu substituo o array da tabela geral, pelo array construido para o Dropdown

      echo view('menu', $data); // Carrega uma view só para o menu
      echo view('automovel/form_create', $data); // Carrega a View do create

    }

    public function form_update($id) {
      $modelo = new AutoModel;

      $data['automovel'] = $modelo->find($id);


 // ------------------- ADICIONAR DROPDOWN DE MARCA IGUAL NO CREATE
      $modelo_marca = new ModelMarca; // Peguei a tabela de MARCAS
      $array_novo = array(); // Array do dropdown ID da marca => NOME DA MARCA
      $data['marca'] = $modelo_marca->findAll(); // Joguei TODOS os valores num array
      // conforme doc: https://codeigniter4.github.io/userguide/helpers/form_helper.html#form_dropdown
      // Transformar array vindo do findAll() no formato aceito pelo dropdown
      foreach ($data['marca'] as $key => $value) {
        $array_novo[$value['TB_MARCA_ID']] = $value['TB_MARCA_NOME'];
        // Cada registro de MARCA, vira uma linha no array, cuja a chave é TB_MARCA_ID e o valor é TB_MARCA_NOME
      }
      $data['marca'] = $array_novo; // Aqui eu substituo o array da tabela geral, pelo array construido para o Dropdown
      // -------------------

      $data['title'] = "Modificar Automoveis";


      echo view('automovel/form_update', $data);
    }

    public function create_automovel() {
      $modelo = new AutoModel; // Modelo Automoveis

      $data = $this->request->getPost();

      $modelo->insert($data);
    }

    public function update_automovel() {
      $modelo = new AutoModel;

      $data = $this->request->getPost();
      $id = $data['TB_AUTOMOVEL_ID'];

      $modelo->update($id,$data);

      return redirect()->to(base_url('public/automovel/listar'));

    }

    public function delete_automovel($id) {
      $modelo = new AutoModel;
      $modelo->delete($id); // Comentar para testar o redirect


      return redirect()->to(base_url('public/automovel/listar'));
    }

}
