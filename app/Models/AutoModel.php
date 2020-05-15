<?php
/**
 * Modelo Exemplo PW3
 *
 * @category   Modelo CodeIgniter4
 * @package    PW3
 * @author     @yurisa2 <yuri@sa2.com.br>
 * @author     Another Author <another@example.com>
 * @version    0.1
 * @link       https://github.com/yurisa2/CodeIgniter4QuickStart.git
 */




namespace App\Models;

use CodeIgniter\Model;

class AutoModel extends Model
{
    protected $table      = 'tb_automovel';
    protected $primaryKey = 'TB_AUTOMOVEL_ID';

    protected $returnType     = 'array';

    protected $allowedFields = ['TB_AUTOMOVEL_NOME',
                                'TB_AUTOMOVEL_ANO_FAB',
                                'TB_AUTOMOVEL_COR',
                                'TB_AUTOMOVEL_KM',
                                'TB_AUTOMOVEL_VALOR_D',
                                'TB_AUTOMOVEL_STATUS',
                                'TB_MARCA_ID',
                                'TB_MODELO_ID'
                              ];

}

?>
