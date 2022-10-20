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
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if ($this->session->get('email')) {
            return redirect()->to(base_url('dashboard'));
        }
        echo view('include/header');
        echo view($this->_baseUrl . 'index');
    }

    public function login()
    {
        $logar = $this->_usuarios->login($this->request->getPost(['email', 'senha']));
        if (isset($logar) && $logar->type == 'error') {
            $this->session->setFlashdata('error', "email ou senha incorretos!");
            return redirect()->back();
        } else {
            return redirect()->to(base_url('dashboard'));
        }
    }
}
