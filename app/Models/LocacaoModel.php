<?php
/**
 * Modelo Exemplo PW3
 *
 * @category   Modelo CodeIgniter4
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




namespace App\Models;

use CodeIgniter\Model;

class LocacaoModel extends Model
{
    protected $table      = 'tb_locacao';
    protected $primaryKey = 'TB_LOCACAO_ID';

    protected $returnType     = 'array';

    protected $allowedFields = ['TB_LOCACAO_TIPO',
                                'TB_LOCACAO_VALOR',
                                'TB_LOCACAO_DT_INICIO',
                                'TB_LOCACAO_DT_FIM',
                                'TB_CLIENTE_ID',
                                'TB_FUNCIONARIO_ID',
                                'TB_AUTOMOVEL_ID',
                              ];

}

?>
