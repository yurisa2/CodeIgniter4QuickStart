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

class Modelo extends Controller
{
    public function listar()
    {
        $modelo = new ModelModelo;

        $data['modelo'] = $modelo->findAll();    

        echo view('modelo/index', $data);

    }

    public function form_create(){
       
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