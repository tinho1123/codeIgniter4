<?php

namespace App\Models;

use CodeIgniter\Model;

class EstadosModels extends Model
{

    protected $table      = 'estados';

    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
