<?php namespace App\Models;
/**
 * Modelo CLIENTE PW3
 *
 * @category   Modelo CLIENTE
 * @package    PW3
 * @author     MATHEUS SOUZA FERRO <matheussouzaferro@gmail.com>
 * @author     AMANDA BATISTA <amandabocardoso0@gmail.com>
 * @author     VICTOR HENRIQUE <victor.ti.henrique@gmail.com>
 * @version    0.1
 */
use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table      = 'tb_cliente';
    protected $primaryKey = 'TB_CLIENTE_ID';

    protected $returnType     = 'array';

    protected $allowedFields = ['TB_CLIENTE_NOME',
                                'TB_CLIENTE_TEL',
                                'TB_CLIENTE_SEXO',
                                'TB_CLIENTE_EMAIL',
                                'TB_CLIENTE_SENHA',
                                'TB_CLIENTE_ENDERECO',
                                'TB_CLIENTE_COMPLEMENTO',
                                'TB_CLIENTE_BAIRRO',
                                'TB_CLIENTE_CIDADE',
                                'TB_CLIENTE_UF',
                                'TB_CLIENTE_DT_NASC',
                                'TB_CLIENTE_DT_CAD'
                            ];

    public function get_client($email) {
      $this->where('TB_CLIENTE_EMAIL', $email); // Produces: WHERE name = 'Joe'

      $query = $this->get(); // Executa a query e guarda uma série de dados, como query, resultado, versão e etc
      $query = $query->getResultArray(); // Extrai o resultado, em forma de tabela

      return $query;
    }

}
