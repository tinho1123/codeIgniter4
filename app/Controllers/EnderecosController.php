<?php

namespace App\Controllers;

use App\Models\EnderecosModels;

class EnderecosController extends BaseController
{
  private string $_baseUrl = 'Enderecos/';
  private EnderecosModels $_db;

  function __construct()
  {
    $this->_db = new EnderecosModels();
    helper('utils');
  }

  function getAll()
  {
    return $this->_db->find();
  }

  function create(?array $arr)
  {
    if (isset($arr)) {

      return $this->_db->insert($arr);
    }
  }
}
