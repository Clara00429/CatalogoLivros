<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Livro;
use Illuminate\Http\Request;
use App\Models\User;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function minhaLista()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        $livros = Livro::where('user_id', $user->id)
            ->where('status', 'quero ler')
            ->get();

        return view('minhaLista', compact('livros'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        //
    }
}
