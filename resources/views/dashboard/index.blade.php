@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <div class="card">

        <div class="card-header">
            <div class="card-title">
                {{ Auth::user()->name; }}
                <a href="{{ route('cliente.export') }}">
                    <button class="btn btn-secondary">
                        Baixar dados
                    </button>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('cliente.create') }}">
                    <button class="btn btn-dark">
                        Cadastrar Cliente
                    </button>
                </a>

                <a href="{{ route('raca.create') }}">
                    <button class="btn btn-dark">
                        Cadastrar Raça
                    </button>
                </a>

                <a href="{{ route('especie.create') }}">
                    <button class="btn btn-dark">
                        Cadastrar Espécie
                    </button>
                </a>
                <a href="{{ route('animal.index') }}">
                    <button class="btn btn-dark">
                        Dados do animal
                    </button>
                </a>
                
                
            </div>
        </div>
        <div class="card-body">
            <table class="table condensed">
                
                        <thead>
                            <tr>
                                <th>
                                    <h3>Nome do cliente </h3>
                                </th>
                                <th>
                                    Consultar
                                </th>
                                <th>
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        @foreach ($clientes as $cliente)
                        <tbody>
                            <tr>
                                <td>
                                    {{ $cliente->name }}
                                </td>
                                <td>
                                    <a href="{{ route('cliente.show', $cliente->id) }}">
                                        <button class="btn btn-dark">
                                            Consultar Cliente
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('cliente.edit', $cliente->id) }}" class="mb-3">
                                        <button class="btn btn-warning">
                                            Editar
                                        </button>
                                    </a>

                                    <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post" class="mt-3">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection