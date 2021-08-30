<?php

namespace App\Http\Livewire;

use App\Models\Animal as ModelsAnimal;
use Illuminate\Http\Request;
use Livewire\Component;

class Animal extends Component
{
    public function render()
    {
        return view('livewire.animal');
    }

    public function index()
    {
        $animais = ModelsAnimal::with('cliente')->get();
        return view('dashboard.animal.index', compact('animais'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function show($id)
    {
        $animais = ModelsAnimal::where('id', $id)->get()->first();
        return view('dashboard.animal.show', compact('animais'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animais = ModelsAnimal::where('id', $id)->get()->first();
        $animais->delete();
        return redirect()->route('cliente.index');
    }
}
