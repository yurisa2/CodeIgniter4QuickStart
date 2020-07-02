<?php

    /**
     * Controle da TB_MODELO PW3
     *
     * @category   Controle da TB_MODELO
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com>
     * @version    0.1
     */

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelModelo;

class Modelo extends BaseController
{
    public function listar()
    {
        $modelo = new ModelModelo;

        $data['modelo'] = $modelo->findAll();

        foreach($data['modelo'] as $key => $value){
            $id = $data['modelo'][$key]['TB_MODELO_ID'];

            $data['modelo'][$key]['TB_MODELO_ID'] = "Id: ".$id;

            $link_alterar = "<a href=form_update/$id>ALterar</a>";
            $link_excluir = "<a href=form_delete/$id>Excluir</a>";

            $data['modelo'][$key]['link_alterar'] = $link_alterar;
            $data['modelo'][$key]['link_excluir'] = $link_excluir;
        }
        echo view('menu');
        echo view('modelo/index', $data);

    }

    public function form_create(){
      echo view('menu');
        echo view('modelo/cadastro');
    }

    public function create_modelo(){
        $modelo = new ModelModelo;
        $data = $this->request->getPost();
        $modelo->insert($data);
        $this -> listar();
    }

    public function form_update($idmodelo){
        $modelo = new ModelModelo;
        $data['modelo'] = $modelo -> find($idmodelo);
        echo view('menu');
        echo view('modelo/alterar', $data);
    }

    public function update_modelo(){
        $modelo = new ModelModelo;
        $data = $this->request->getPost();
        $id = $data['TB_MODELO_ID'];
        $modelo->update($id,$data);
        $this -> listar();
    }

    public function form_delete($id){

        $modelo = new ModelModelo;
        $modelo->delete($id);

    }

}

?>
