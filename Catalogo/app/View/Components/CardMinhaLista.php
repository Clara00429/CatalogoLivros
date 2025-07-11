<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;

class CardMinhaLista extends Component
{
    public $titulo;
    public $autor;
    public $ano;
    public $editora;
    public $paginas;
    public $imagem;

    /**
     * Create a new component instance.
     */
    public function __construct($titulo, $autor, $ano, $editora, $paginas, $imagem)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->editora = $editora;
        $this->paginas = $paginas;
        $this->imagem = $imagem;
    }

    /**
     * Get the view that represents the component.
     */
    public function render(): \Illuminate\View\View|Closure|string
    {
        return view('components.card-minha-lista');
    }
}
