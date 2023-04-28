<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function liste_produto()
    {
        $produto = Produto::all();
        return view('produto.liste', compact('produto'));
    }

    public function ajouter_produto()
    {
        return view('produto.ajouter');
    }

    public function ajouter_produto_tratamento(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'quantidade' => 'required',
        ]);

        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->save();

        return redirect('/ajouter')->with('status', 'Produto adicionado com Sucesso !');

    }

    public function update_produto($id){
        $produto = Produto::find($id);

        return view('produto.update', compact('produto'));
    }

    public function update_produto_tratamento(Request $request){
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'quantidade' => 'required',
        ]);
        $produto = Produto::find($request->id);
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;
        $produto->update();

        return redirect('/produto')->with('status', 'Produto alterado com Sucesso !');

    }

    public function delete_produto($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/produto')->with('status', 'Produto excluido com Sucesso !');
    }

}
