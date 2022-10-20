<?php

namespace App\Controllers;

use App\Models\ClientesModels;
use CodeIgniter\API\ResponseTrait;

class ClientesController extends BaseController
{
  private string $_baseUrl = 'Clientes/';
  private string $_include = 'include/';

  use ResponseTrait;

  function __construct()
  {
    $this->_db = new ClientesModels();
    helper('utils');
  }

  function index()
  {
    $data = [
      'clientes' => $this->_db->findAll(),
      'titulo' => 'Clientes',
      'js' => view($this->_baseUrl . 'js/main.js'),
    ];
    echo view($this->_include . 'header');
    echo view($this->_include . 'menu');
    echo view($this->_baseUrl . 'index', $data);
    echo view($this->_baseUrl . 'modal/criar', $data);
    echo view($this->_baseUrl . 'modal/editar');
    echo view($this->_include . 'footer');
  }

  public function criar()
  {
    $this->_db->insert($this->request->getPost());
    return redirect()->to(base_url('clientes'));
  }


  public function delete($id)
  {

    return $this->respond($this->_db->delete(['id' => $id]), 200);
  }

  public function editar()
  {
    $data = [
      'nome' => $_POST['nome'],
      'email' => $_POST['email'],
      'data_nascimento' => $_POST['data_nascimento'],
      'sexo' => $_POST['sexo'],
      'ativo' => isset($_POST['ativo']) ? 'S' : 'N',
      'mensagem' => $_POST['mensagem'],
    ];
    $this->_db->update($_POST['id'], $data);
    return redirect()->to(base_url('clientes'));
  }


  public function get_dados(string $id = null)
  {
    return $this->respond($this->_db->find(["id" => $id]), 200);
  }
}
