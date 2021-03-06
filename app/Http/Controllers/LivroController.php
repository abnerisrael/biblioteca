<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Editora;
use App\Genero;
use App\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros_disponiveis = Livro::all()->where('status_id', '=', 1);
        $livros_alugados = Livro::all()->where('status_id', '=', 2);
        return view('pages.livro.index')
                ->with('livros_disponiveis', $livros_disponiveis)
                ->with('livros_alugados', $livros_alugados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all();
        $editoras = Editora::all();
        return view('pages.livro.create')
            ->with('generos', $generos)
            ->with('editoras', $editoras);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livro = new Livro();
        $livro->nome = $request->nome;
        $livro->genero_id = $request->genero_id;
        $livro->editora_id = $request->editora_id;
        $livro->save();

        return self::index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        return view('pages.livro.show')->with('livro', $livro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        return view('pages.livro.edit')->with('livro', $livro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        // Executado quando for uma locacao
        if(!empty($request->cliente_id)) {
            $livro->cliente_id = $request->cliente_id;
            $livro->status_id = 2; //1 disponivel //2 alugado
            $livro->save();
            return redirect()->route('livros.index');
        }

        $livro->nome = $request->nome;
        $livro->genero_id = $request->genero_id;
        $livro->editora_id = $request->editora_id;
        $livro->save();
        return redirect()->route('livros.show', ['livros'=>$livro]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return self::index();
    }

    public function rent(Livro $livro){
        return view('pages.livro.rent')->with('livro', $livro);
    }

    public function giveback(Livro $livro){
        $livro->status_id = 1;
        $livro->save();
        return redirect()->route('livros.index');
    }
}
