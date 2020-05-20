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

class CargoModel extends Model
{
    protected $table      = 'tb_cargo';
    protected $primaryKey = 'TB_CARGO_ID';

    protected $returnType     = 'array';

    protected $allowedFields = ['TB_CARGO_NOME'];

}

?>
