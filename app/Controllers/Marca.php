<?php

    /**
     * Controle da TB_MARCA PW3
     *
     * @category   Controle da TB_MARCA
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com>
     * @version    0.1
     */

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelMarca;

class Marca extends BaseController
{
    public function listar()
    {
        $modelo = new ModelMarca;

        $data['marca'] = $modelo->findAll();

        foreach($data['marca'] as $key => $value){
            $id = $data['marca'][$key]['TB_MARCA_ID'];

            $data['marca'][$key]['TB_MARCA_ID'] = "Id: ".$id;

            $link_alterar = "<a href=form_update/$id>ALterar</a>";
            $link_excluir = "<a href=form_delete/$id>Excluir</a>";

            $data['marca'][$key]['link_alterar'] = $link_alterar;
            $data['marca'][$key]['link_excluir'] = $link_excluir;
        }
        echo view('menu');
        echo view('marca/index', $data);

    }

    public function form_create(){
      echo view('menu');
        echo view('marca/cadastro');
    }

    public function create_marca(){
        $Marca = new ModelMarca;
        $data = $this->request->getPost();
        $Marca->insert($data);
        $this -> listar();
    }

    public function form_update($idMarca){
        $Marca = new ModelMarca;
        $data['marca'] = $Marca -> find($idMarca);
        echo view('menu');
        echo view('marca/alterar', $data);
    }

    public function update_marca(){
        $Marca = new ModelMarca;
        $data = $this->request->getPost();
        $id = $data['TB_MARCA_ID'];
        $Marca->update($id,$data);
        $this -> listar();
    }

    public function form_delete($id){

        $Marca = new ModelMarca;
        $Marca->delete($id);

    }

}

?>
