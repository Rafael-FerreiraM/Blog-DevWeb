<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produtos extends BaseController
{
    public function listar()
    {
        $produto_model = new ProdutoModel();

        $produtos = $produto_model
                            ->findAll();

        $data['produtos'] = $produtos;

        echo View('templates/header');
        echo View('produtos/listar', $data);
        echo View('templates/footer');
    }

    public function cadastrar()
    {
        $dados = $this->request
                        ->getVar();

        $produto_model = new ProdutoModel();

        $produto_model->insert($dados);

        return redirect()->to('/produtos/listar?alert=successCreate');
    }

    public function excluir($ProdutoId)
    {
        $produto_model = new ProdutoModel();

        $produto_model
                ->where('ProdutoId', $ProdutoId)
                ->delete();

        return redirect()->to('/produtos/listar?alert=successDelete');
    }

    public function editar()
    {
        $dados = $this->request
                        ->getVar();

        $produto_model = new ProdutoModel();

        $produto_model
                ->where('ProdutoId', $dados['ProdutoId'])
                ->set($dados)
                ->update();

        return redirect()->to('/produtos/listar?alert=successEdit');
    }
}
