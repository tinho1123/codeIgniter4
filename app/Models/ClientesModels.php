<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModels extends Model
{
  protected $table      = 'clientes';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';

  protected $allowedFields = ['cpf_cnpj', 'nome', 'data_nascimento', 'sexo', 'email', 'mensagem', 'ativo'];

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}
