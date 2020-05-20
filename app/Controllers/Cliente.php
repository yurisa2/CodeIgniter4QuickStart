<?php namespace App\Controllers;
/**
 * Controle CLIENTE PW3
 *
 * @category   Controle CLIENTE
 * @package    PW3
 * @author     MATHEUS SOUZA FERRO <matheussouzaferro@gmail.com>
 * @author     AMANDA BATISTA <amandabocardoso0@gmail.com>
 * @author     VICTOR HENRIQUE <victor.ti.henrique@gmail.com>
 * @version    0.1
 */
use CodeIgniter\Controller;
use App\Models\ClienteModel;
class Cliente extends Controller
{

    public function listar()
    {
        $Cliente = new ClienteModel;
        $data['dados'] = $Cliente -> findAll();
        echo view('ClienteView/index', $data);
    }

    public function form_create(){

        echo view('ClienteView/cadastro');
    }

    public function form_update($idCliente){
        $Cliente = new ClienteModel;
        $data['cliente'] = $Cliente -> find($idCliente);

        echo view('ClienteView/alterar', $data);
    }

    public function create_cliente(){
        $Cliente = new ClienteModel;
        $data = $this->request->getPost();
        $Cliente->insert($data);~
        $this -> listar();
    }

    public function update_cliente(){
        $Cliente = new ClienteModel;
        $data = $this->request->getPost();
        $id = $data['TB_CLIENTE_ID'];
        $Cliente->update($id,$data);
        $this -> listar();
    }

    public function form_delete($id){

        $Cliente = new ClienteModelo;
        $Cliente->delete($id);

    }


}
