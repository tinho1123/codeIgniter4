<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModels extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nome', 'email', 'senha', 'fk_empresa', 'fk_nivel_acesso', 'ativo'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
