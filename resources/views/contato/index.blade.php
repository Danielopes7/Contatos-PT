@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            Contatos
                        </div>
                        <div class="col-6">
                            @auth
                            <div class="float-right" style="float: right">
                                <a href="{{ route('contato.create')}}" class="mr-3">
                                    <button type="button" class="btn btn-primary btn-sm">Novo</button>
                                </a>                             
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($contatos as $key => $contato)
                                <tr>
                                    <th scope="row">{{ $contato->id }}</th>
                                    <td> {{ $contato->nome }}</td>
                                    <td> {{ $contato->telefone }}</td>
                                    <td> {{ $contato->email }}</td>
                                    @auth
                                    <td><a href="{{ route('contato.edit', $contato->id) }}"><button type="button" class="btn btn-light btn-sm">Editar</button></a></td>
                                    <td>
                                        <form id="form_{{ $contato->id }}" method="post" action="{{ route('contato.destroy', ['contato' => $contato->id]) }}">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <a href="#" onclick="document.getElementById('form_{{ $contato->id }}').submit()"><button type="button" class="btn btn-light btn-sm">Excluir</button></a>
                                    </td>
                                    <td>
                                    <a href=" {{ route('contato.show',['contato' => $contato->id])}}"><button type="button" class="btn btn-light btn-sm">Mostrar</button></a>
                                    </td>
                                    @endauth
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{ $contatos->previousPageUrl() }}">Voltar</a></li>

                            @for($i = 1; $i <= $contatos->lastPage(); $i++)
                                <li class="page-item {{ $contatos->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $contatos->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            
                            <li class="page-item"><a class="page-link" href="{{ $contatos->nextPageUrl() }}">Avançar</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection