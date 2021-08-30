<?php

namespace App\Http\Livewire;

use App\Exports\ClienteExport;
use App\Models\Animal;
use App\Models\Cliente;
use App\Models\Contato;
use App\Models\Especie;
use App\Models\Raca;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserComponent extends Component
{
    // public function render()
    // {
    //     return view('livewire.user-component');
    // }

    public function form()
    {
        $racas = Raca::get();
        $especies = Especie::get();
        return view('dashboard.create', compact('racas', 'especies'));
    }
    public function index()
    {
        //global $animais;
        $users = User::get();
        $clientes = Cliente::get();
        return view('dashboard.index', compact('clientes', 'users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $racas = Raca::get();
        $especies = Especie::get();
        return view('dashboard.create', compact('racas', 'especies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query_cli = DB::table('clientes')->select('id')->orderBy('created_at', 'desc')->first();
        
        $clientes = Cliente::create([
            'name' => $request->name,
        ]);
        $clientes->save();

        $contatos = Contato::Create([
            'cliente_id' => $query_cli->id,
            'tel_1'      => $request->tel_1,
            'tel_2'      => $request->tel_2,
            'email'      => $request->email,
        ]);
        $contatos->save();

        if(empty($query_cli->id))
        {
            $query_cli->id = 1;
            $animal = Animal::Create([
                'cliente_id'              =>$query_cli->id,
                'raca_id'                 => $request->raca[0],
                'especie_id'              => $request->especie[0],
                'nome'                    => $request->nome_pet,
                'historico_clinico'       => $request->historico_clinico,
                'nascimento'              => $request->nascimento,
            ]);
        }
        else{
        $animal = Animal::Create([
            'cliente_id'              =>$query_cli->id,
            'raca_id'                 => $request->raca[0],
            'especie_id'              => $request->especie[0],
            'nome'                    => $request->nome_pet,
            'historico_clinico'       => $request->historico_clinico,
            'nascimento'              => $request->nascimento,
        ]);
    }
        
        $animal->save();
        
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = Cliente::where('id', $id)->get()->first();
        return view('dashboard.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Cliente::where('id', $id)->get()->first();
        return view('dashboard.edit', compact('clientes'));
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
        $query_cli = DB::table('clientes')->select('id')->orderBy('created_at', 'desc')->first();
        $clientes = Cliente::where('id', $id)->get()->first();

        $clientes->update([
            'name' => $request->name,
        ]);
        $clientes->save();

        $contatos = Contato::get();
        $contatos->update([
            'cliente_id' => $query_cli->id,
            'tel_1'      => $request->tel_1,
            'tel_2'      => $request->tel_2,
            'email'      => $request->email,
        ]);
        $contatos->save();

        $animal = Animal::get();
        $animal->update([
            'cliente_id'              =>$query_cli->id,
            'raca_id'                 => $request->raca[0],
            'especie_id'              => $request->especie[0],
            'nome'                    => $request->nome_pet,
            'historico_clinico'       => $request->historico_clinico,
            'nascimento'              => $request->nascimento,
        ]);
        $animal->save();

        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Cliente::where('id', $id)->get()->first();
        $clientes->delete();
        return redirect()->route('cliente.index');
    }

    public function export() 
    {
        return Excel::download(new ClienteExport, 'clientes.csv');
    }
}
