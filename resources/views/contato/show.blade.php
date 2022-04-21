@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $contato->nome }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" value="{{ $contato->nome }}">

                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" value="{{ $contato->telefone }}">

                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{ $contato->email }}">
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
