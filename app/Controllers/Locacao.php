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
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */



namespace App\Controllers;

use App\Models\LocacaoModel;
use CodeIgniter\Controller;

class Locacao extends Controller
{
    public function listar()
    {
        $modelo = new LocacaoModel;

        $data['locacao'] = $modelo->findAll();

        echo view('locacao/listar', $data);
    }

    public function form_create() {

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