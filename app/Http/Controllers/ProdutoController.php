<?php // criado com --api para otimizar o desenvolvimento, apenas preenchendo os campos ja criados

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // lista geral
    {
        return response()->json(Produto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // cria
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201); //status http "criado com sucesso"
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // busca por id
    {
        $produto = Produto::findOrFail($id);
        return response()->json($produto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) // edita
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return response()->json($produto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) // apaga
    {
         $produto = Produto::findOrFail($id);
        $produto->delete();
        return response()->json(null, 204); // status http "sem conteudo"SSS
    }
}
