<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        echo View('login/index');
    }

    public function autenticar()
    {
        $dados = $this->request
                            ->getVar();

        $login_model = new LoginModel();

        $login = $login_model
                        ->where('Usuario', $dados['Usuario'])
                        ->where('Senha', $dados['Senha'])
                        ->first();

        if(!empty($login))
        {
            return redirect()->to('/produtos/listar');
        }

        return redirect()->to('/login?alert=errorLogin');
    }
}
