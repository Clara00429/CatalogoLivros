@extends('layouts.estruturaRe')

@section('conteudo')
<div class="container my-4">
    <h1 class="text-center mb-4">Minha Lista - Quero Ler</h1>

   <!-- @if($livros->isEmpty())
        <div class="alert alert-info text-center">
            Você ainda não adicionou nenhum livro à sua lista de leitura.
        </div>
    @else-->
           <div class="row row-cols-1 row-cols-md-1 g-4">
                <div class="col">
                    <x-card-minha-lista
                        titulo="Dom Casmurro" 
                        autor="Machado de Assis" 
                        ano="1899" 
                        editora="Editora Carambaia" 
                        paginas="256" 
                        imagem="{{ asset('images/livros/domCas.jpg') }}"
                    />
                </div>
            </div>
   <!-- @endif-->
</div>
@endsection
