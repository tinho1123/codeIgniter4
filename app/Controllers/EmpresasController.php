<?php

namespace App\Controllers;

use App\Models\EmpresasModels;
use App\Controllers\EnderecosController;
use App\Controllers\EstadosController;
use CodeIgniter\API\ResponseTrait;

class EmpresasController extends BaseController
{
  private string $_baseUrl = 'Empresas/';
  private EmpresasModels $_db;
  private EnderecosController $_enderecos;
  private EstadosController $_estados;
  use ResponseTrait;

  function __construct()
  {
    $this->_db = new EmpresasModels();
    $this->_enderecos = new EnderecosController();
    $this->_estados = new EstadosController();
    helper('utils');
  }

  function index()
  {
    $data = [
      'empresas' => $this->_db->find(),
      'estados' => $this->_estados->getAll(),
      'titulo' => 'Empresas',
      'js' => view($this->_baseUrl . 'js/main.js'),
    ];

    echo view('include/header');
    echo view($this->_baseUrl . 'index', $data);
    echo view($this->_baseUrl . 'modal/criar', $data);
    echo view($this->_baseUrl . 'modal/editar');
    echo view('include/footer', $data);
  }

  function getAll()
  {
    return $this->_db->findAll();
  }

  function criarEmpresa()
  {
    $arr_empresa = $this->request->getPost(['razao_social', 'fundacao', 'email', 'senha']);
    $arr_endereco =  $this->request->getPost(['logradouro', 'numero', 'bairro', 'cidade', 'uf', 'cep']);
    $id_endereco = $this->_enderecos->create($arr_endereco);
    $arr_empresa['fk_endereco'] = $id_endereco;
    $this->_db->insert($arr_empresa);
    return redirect()->to(site_url('empresas'));
  }

  public function delete($id)
  {

    return $this->respond($this->_db->delete(['id' => $id]), 200);
  }

  public function editar()
  {
    $data = [
      'razao_social' => $_POST['razao_social'],
      'fundacao' => $_POST['fundacao'],
      'email' => $_POST['email'],
      'ativo' => isset($_POST['ativo']) ? 'S' : 'N',
    ];
    $this->_db->update($_POST['id'], $data);
    return redirect()->to(base_url('empresas'));
  }


  public function get_dados(string $id = null)
  {
    return $this->respond($this->_db->find(["id" => $id]), 200);
  }
}
