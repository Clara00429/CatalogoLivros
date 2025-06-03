@extends('layouts.estruturaPadrao')

@section('conteudo')
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="text-fill">
        <h1 class="mb-4" style="color: #642764;">Bem-vindo à seu Catálogo de Livros</h1>

        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('login') }}">
                <button class="btn btn-primary" style="background-color: #642764; border-color: #642764;">
                    Entrar
                </button>
            </a>

            <a href="{{ route('register') }}">
                <button class="btn btn-outline-secondary" style="color: #642764; border-color: #642764;">
                    Cadastrar
                </button>
            </a>
        </div>
    </div>
</div>
@endsection
