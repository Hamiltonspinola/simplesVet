<?php

namespace App\Http\Livewire;

use App\Models\Animal;
use App\Models\Especie;
use App\Models\Raca as ModelsRaca;
use Illuminate\Http\Request;
use Livewire\Component;

class Raca extends Component
{
    public function render()
    {
        return view('livewire.raca');
    }
    public function index()
    {
        $racas = Animal::get();
        $especies = Especie::get();
        return view('form.form_all', compact('racas', 'especies'));
    }

    public function create()
    {
        return view('dashboard.raca.create');
    }

    public function store(Request $request)
    {
        ModelsRaca::create([
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
