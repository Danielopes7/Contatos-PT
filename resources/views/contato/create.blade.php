@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Contato</div>

                <div class="card-body">
                <form method="post" action="{{ route('contato.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" value="{{ $contato->nome ?? old('nome') }}" placeholder="Nome">
                        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="{{ $contato->telefone ?? old('telefone') }}" placeholder="Telefone" class="borda-preta">
                        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $fornecedor->email ?? old('email') }}" placeholder="Email" class="borda-preta">
                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
