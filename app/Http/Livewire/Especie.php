<?php

namespace App\Http\Livewire;

use App\Models\Especie as ModelsEspecie;
use Illuminate\Http\Request;
use Livewire\Component;

class Especie extends Component
{
    public function render()
    {
        return view('livewire.especie');
    }
    public function index()
    {

    }

    public function create()
    {
        return view('dashboard.especie.create');
    }

    public function store(Request $request)
    {
        ModelsEspecie::create([
            'nome' => $request->nome,
        ]);
        return redirect()->route('cliente.index');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function show()
    {

    }

    public function delete()
    {

    }
}
