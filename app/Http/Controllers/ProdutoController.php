<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function pesquisar()
    {
        // Busca todos os produtos do banco de dados
        $produtos = Produto::all();

        // Chama a view produto.pequisar e envia os produtos buscados
        return view('produto.pesquisar')->with('produtos', $produtos);
    }
}
