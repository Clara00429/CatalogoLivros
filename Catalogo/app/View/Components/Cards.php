<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cards extends Component
{
    /**
     * Create a new component instance.
     */
    public $titulo;
    public $imagem;
    public $autor;
    public $ano;
    public $editora;
    public $paginas;

    public function __construct($titulo, $imagem, $autor, $ano, $editora, $paginas)
    {
        $this->titulo = $titulo;
        $this->imagem = $imagem;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->editora = $editora;
        $this->paginas = $paginas;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards');
    }
}
