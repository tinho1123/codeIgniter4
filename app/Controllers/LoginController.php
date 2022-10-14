<?php

namespace App\Controllers;

use App\Controllers\UsuariosController;

class LoginController extends BaseController
{
    private string $_baseUrl = 'Login/';

    public function __construct()
    {
        helper('utils');
        $this->_usuarios = new UsuariosController();
    }

    public function index()
    {
        echo view('include/header');
        echo view($this->_baseUrl . 'index');
    }

    public function login()
    {
        $logar = $this->_usuarios->login($this->request->getPost(['email', 'senha']));
        if (isset($logar) && $logar->type == 'error') {
            return redirect()->to(base_url());
        } else {
            return redirect()->to(base_url('home'));
        }
    }
}
