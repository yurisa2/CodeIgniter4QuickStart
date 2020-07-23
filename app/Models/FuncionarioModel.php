<?php
/**
 * Modelo Exemplo PW3
 *
 * @category   Modelo CodeIgniter4
 * @package    PW3
 * @author     Gabriel da Silva
 * @author     Daniel
 * @author     Luigi
 * @author     Leandro
 * @author     Valérya
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */




namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table      = 'tb_funcionario';
    protected $primaryKey = 'TB_FUNCIONARIO_ID';

    protected $returnType     = 'array';

    protected $allowedFields = ['TB_FUNCIONARIO_NOME',
                                'TB_FUNCIONARIO_TEL',
                                'TB_FUNCIONARIO_DT_CONTRATO',
                                'TB_CARGO_ID'
                              ];

    public function tb_funcionario_completo() {
      $this->join('tb_cargo', 'tb_funcionario.TB_CARGO_ID = tb_cargo.TB_CARGO_ID', 'inner');

      $query = $this->get(); // Executa a query e guarda uma série de dados, como query, resultado, versão e etc
      $query = $query->getResultArray(); // Extrai o resultado, em forma de tabela

      return $query;

    }
}

?>
