<?php 

    /**
     * MODEL da TB_MARCA PW3
     *
     * @category   model
     * @package    PW3
     * @author     HELITON MARTINS DE LIMA <helitonmartinsdelima@gmail.com> 
     * @version    0.1
     */

namespace App\Models;

use CodeIgniter\Model;

class ModelMarca extends Model
{
    protected $table      = 'tb_marca';
    protected $primaryKey = 'tb_marca_id';

    protected $returnType     = 'array';

    protected $allowedFields = ['TB_MARCA_NOME'];
    
}