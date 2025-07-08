<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;

class CardMinhaLista extends Component
{
    public $id;
    public $titulo;
    public $autor;
    public $ano;
    public $editora;
    public $paginas;
    public $imagem;
    public $status;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $titulo, $autor = null, $ano = null, $editora = null, $paginas = null, $imagem = null, $status = null)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->editora = $editora;
        $this->paginas = $paginas;
        $this->imagem = $imagem;
        $this->status = $status;
    }

    /**
     * Get the view that represents the component.
     */
    public function render(): \Illuminate\View\View|Closure|string
    {
        return view('components.card-minha-lista');
    }
}
