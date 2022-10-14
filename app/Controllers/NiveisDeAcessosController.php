<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NiveisDeAcessosModels;

class NiveisDeAcessosController extends BaseController
{
  private string $_baseUrl = 'NivelAcesso/';
  private NiveisDeAcessosModels $_db;

  function __construct()
  {
    $this->_db = new NiveisDeAcessosModels();
  }

  function getAll()
  {
    return $this->_db->findAll();
  }
}
