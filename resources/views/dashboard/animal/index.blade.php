@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <div class="card">

        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="col-md-6">
                <a href="{{ route('cliente.index') }}">
                    <button class="btn btn-dark">
                        Home
                    </button>
                </a>
                
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <h3>Nome do animal</h3>
                        </th>
                        <th>
                            Data de Nascimento
                        </th>
                        <th>
                            Historico Clinico
                        </th>
                        <th>
                            Ações
                        </th>
                    </tr>
                </thead>
                @foreach ($animais as $animal)
                <tbody>
                    <tr>
                        <td>
                            {{ $animal->nome}}
                        </td>
                        <td>
                            {{ $animal->nascimento}}
                        </td>
                        <td>
                            {{ $animal->historico_clinico}}
                        </td>
                        <td>
                            <a href="{{ route('animal.show', $animal->id) }}">
                                <button class="btn btn-dark">
                                    Consultar
                                </button>
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    
@endsection