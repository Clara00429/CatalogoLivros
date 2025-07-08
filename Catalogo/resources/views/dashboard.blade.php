@extends('layouts.estruturaRe')

@section('conteudo')
<div class="container my-4">
    <h1 class="text-center mb-4">Explorar Livros</h1>

    <div class="row row-cols-1 row-cols-md-1 g-4">
        <div class="col">
            <x-cards 
                titulo="Dom Casmurro" 
                autor="Machado de Assis" 
                ano="1899" 
                editora="Editora Carambaia" 
                paginas="256" 
                imagem="{{ asset('images/livros/domCas.jpg') }}"
            />
        </div>
        <div class="col">
            <x-cards
                titulo="O Pequeno Príncipe" 
                autor="Antoine de Saint-Exupéry" 
                ano="1943" 
                editora="Editora Arqueirp" 
                paginas="96" 
                imagem="{{ asset('images/livros/peqPrin.jpg') }}"
            />
        </div>
        <div class="col">
            <x-cards
                titulo="1984" 
                autor="George Orwell" 
                ano="1949" 
                editora="Editora Companhia das Letras" 
                paginas="328" 
                imagem="{{ asset('images/livros/1984.jpg') }}"            
            />
        </div>
        <div class="col">
            <x-cards
                titulo="A Culpa é das Estrelas" 
                autor="John Green" 
                ano="2012" 
                editora="Intríseca" 
                paginas="288" 
                imagem="{{ asset('images/livros/estrelas.jpg') }}"            
            />
        </div>
    </div>
</div>
@endsection
