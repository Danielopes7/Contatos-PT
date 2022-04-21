<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contato;
class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos= Contato::paginate(7);
        return view('contato.index', ['contatos' => $contatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:5',
            'telefone' => 'required|min:9|max:9|unique:contatos,telefone',
            'email' => 'required|email|unique:contatos,email'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome deve ter no mínimo 5 caracteres',
            'telefone.min' => 'O campo telefone deve ter 9 caracteres',
            'telefone.max' => 'O campo telefone deve ter 9 caracteres',
            'telefone.unique' => 'Telefone já cadastrado',
            'email.email' => 'O campo e-mail não foi preenchido corretamente',
            'email.unique' => 'E-mail já cadastrado'
        ];
        $request->validate($regras, $feedback);
        $contato = new Contato();
        $contato->create($request->all());

        return redirect()->route('contato.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        return view('contato.show',['contato' => $contato]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato $contato)
    {
        return view('contato.edit', ['contato' => $contato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contato $contato)
    {
        $regras = [
            'nome' => 'required|min:5',
            'telefone' => 'required|min:9|max:9',
            'email' => 'required|email'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome deve ter no mínimo 5 caracteres',
            'telefone.min' => 'O campo telefone deve ter 9 caracteres',
            'telefone.max' => 'O campo telefone deve ter 9 caracteres',
            'email.email' => 'O campo e-mail não foi preenchido corretamente',

        ];

        $request->validate($regras, $feedback);
        $contato->update($request->all());
        return redirect()->route('contato.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato $contato)
    {
        $contato->delete();
        return redirect()->route('contato.index');
    }
}
