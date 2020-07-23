<?php
/**
 * Controller Exemplo PW3
 *
 * @category   Controller CodeIgniter4
 * @package    PW3
 * @author     @yurisa2 <yuri@sa2.com.br>
 * @author     Antonio Marcos <portejunior5050@gmail.com>
 * @author     Bianca Maria <mariabitabianca@gmail.com>
 * @author     Bruno Almeida <4lmeidasilva@gmail.com>
 * @author     Dayane Yoni <dayaneyoni@gmail.com>
 * @author     Lucas Gonçalves <luc.tricolor.silva648@gmail.com>
 * @author     Lucas Gusmao <lucas.gusmao.m@gmail.com>
 * @author     Rafael Rodrigues <>
 * @version    0.2
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */



namespace App\Controllers;

use App\Models\LocacaoModel;
use CodeIgniter\Controller;

class Locacao extends BaseController
{
    public function listar()
    {
        $modelo = new LocacaoModel;

        $data['locacao'] = $modelo->tb_locacao_completo();

        // echo '<pre>';
        // var_dump($data['locacao']);

        foreach ($data['locacao'] as $key => $value) {
          $id = $data['locacao'][$key]['TB_LOCACAO_ID'];

          unset($data['locacao'][$key]['TB_FUNCIONARIO_ID']);
          unset($data['locacao'][$key]['TB_AUTOMOVEL_ID']);

          unset($data['locacao'][$key]['TB_CLIENTE_ID']);
          unset($data['locacao'][$key]['TB_CLIENTE_BAIRRO']);
          unset($data['locacao'][$key]['TB_CLIENTE_CIDADE']);
          unset($data['locacao'][$key]['TB_CLIENTE_COMPLEMENTO']);
          unset($data['locacao'][$key]['TB_CLIENTE_DT_CAD']);
          unset($data['locacao'][$key]['TB_CLIENTE_DT_NASC']);
          unset($data['locacao'][$key]['TB_CLIENTE_EMAIL']);
          unset($data['locacao'][$key]['TB_CLIENTE_ENDERECO']);
          unset($data['locacao'][$key]['TB_CLIENTE_ID']);
          unset($data['locacao'][$key]['TB_CLIENTE_SENHA']);
          unset($data['locacao'][$key]['TB_CLIENTE_SEXO']);
          unset($data['locacao'][$key]['TB_CLIENTE_TEL']);
          unset($data['locacao'][$key]['TB_CLIENTE_UF']);

          unset($data['locacao'][$key]['TB_CARGO_ID']);
          unset($data['locacao'][$key]['TB_FUNCIONARIO_DT_CONTRATO']);
          unset($data['locacao'][$key]['TB_FUNCIONARIO_ID']);
          // unset($data['locacao'][$key]['TB_FUNCIONARIO_NOME']);
          unset($data['locacao'][$key]['TB_FUNCIONARIO_TEL']);

          unset($data['locacao'][$key]['TB_AUTOMOVEL_ANO_FAB']);
          unset($data['locacao'][$key]['TB_AUTOMOVEL_COR']);
          unset($data['locacao'][$key]['TB_AUTOMOVEL_ID']);
          unset($data['locacao'][$key]['TB_AUTOMOVEL_KM']);
          // unset($data['locacao'][$key]['TB_AUTOMOVEL_NOME']);
          unset($data['locacao'][$key]['TB_AUTOMOVEL_STATUS']);
          unset($data['locacao'][$key]['TB_AUTOMOVEL_VALOR_D']);
          unset($data['locacao'][$key]['TB_MARCA_ID']);
          unset($data['locacao'][$key]['TB_MODELO_ID']);

          $link_alterar = "<a href=form_update/$id>Alterar Registro</a>";
          $link_delete = "<a href=delete_locacao/$id>Deletar Registro</a>";


          $data['locacao'][$key]['Link_Alterar'] = $link_alterar;
          $data['locacao'][$key]['Link_Deletar'] = $link_delete;
        }

        echo view('menu');
        echo view('locacao/listar', $data);
    }

    public function form_create() {
      echo view('menu');
        echo view('locacao/form_create');

    }

    public function create_locacao() {
        $modelo = new LocacaoModel;

        $data = $this->request->getPost();

        $modelo->insert($data);
    }

    public function form_update($id) {
        $modelo = new LocacaoModel;

        $data['locacao'] = $modelo->find($id);

        echo view('locacao/form_update', $data);
    }

    public function update_locacao() {
        $modelo = new LocacaoModel;

        $data = $this->request->getPost();
        $id = $data['TB_LOCACAO_ID'];

        $modelo->update($id,$data);
      }

    public function delete_locacao($id) {
        $modelo = new LocacaoModel;
        $modelo->delete($id);
    }
}
