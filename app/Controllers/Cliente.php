<?php namespace App\Controllers;
/**
 * Controle CLIENTE PW3
 *
 * @category   Controle CLIENTE
 * @package    PW3
 * @author     MATHEUS SOUZA FERRO <matheussouzaferro@gmail.com>
 * @author     AMANDA BATISTA <EMAIL@GMAIL.COM>
 * @author     VICTOR HENRIQUE <EMAIL@GMAIL.COM>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */
use CodeIgniter\Controller;
use App\Models\ClienteModel;

class Cliente extends BaseController
{

    public function listar()
    {
        $Cliente = new ClienteModel;
        $data['dados'] = $Cliente -> findAll();

        foreach($data['dados'] as $key => $value){
            $id = $data['dados'][$key]['TB_CLIENTE_ID'];
            $data['dados'][$key]['TB_CLIENTE_ID'] = $id;

            unset($data['dados'][$key]['TB_CLIENTE_COMPLEMENTO']);
            unset($data['dados'][$key]['TB_CLIENTE_BAIRRO']);
            unset($data['dados'][$key]['TB_CLIENTE_DT_NASC']);
            unset($data['dados'][$key]['TB_CLIENTE_DT_CAD']);

                //form_update/ID:1
            $linkAlterar = "<a href=form_update/$id>Alterar</a>";
            $linkDeletar = "<a href=form_delete/$id>Deletar</a>";


            $data['dados'][$key]['Link_Alterar'] = $linkAlterar;
            $data['dados'][$key]['Link_Deletar'] = $linkDeletar;

        }
        echo view('menu');
        echo view('ClienteView/index', $data);

    }

    public function form_create(){
      echo view('menu');
        echo view('ClienteView/cadastro');
    }

    public function form_update($idCliente){
        $Cliente = new ClienteModel;
        $data['cliente'] = $Cliente -> find($idCliente);
        echo view('menu');
        echo view('ClienteView/alterar', $data);
    }

    public function create_cliente(){
        $Cliente = new ClienteModel;
        $data = $this->request->getPost();
        $Cliente->insert($data);

    }

    public function update_cliente(){
        $Cliente = new ClienteModel;
        $data = $this->request->getPost();
        $id = $data['TB_CLIENTE_ID'];
        $Cliente->update($id,$data);

    }

    public function form_delete($id){

        $Cliente = new ClienteModel;
        $Cliente->delete($id);

    }
}
