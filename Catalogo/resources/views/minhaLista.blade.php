@extends('layouts.estruturaRe')

@section('conteudo')
<div class="container my-4">
    <h1 class="text-center mb-4" style="color: #642764;">Minha Lista - Quero Ler</h1>

    @if($livros->isEmpty())
        <div class="alert alert-info text-center">
            Você ainda não adicionou nenhum livro à sua lista de leitura.
        </div>
    @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($livros as $livro)
                <div class="col">
                    <x-card-minha-lista
                        :id="$livro->id"
                        :titulo="$livro->titulo"
                        :autor="$livro->autor"
                        :ano="$livro->ano"
                        :editora="$livro->editora"
                        :paginas="$livro->paginas"
                        :imagem="$livro->imagem"
                        :status="$livro->status"
                    />
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
