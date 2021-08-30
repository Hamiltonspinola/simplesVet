@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <div class="card">

        <div class="card-header">
            <div class="card-title">
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
                <tbody>
                    <tr>
                        <td>
                            {{ $animais->nome}}
                        </td>
                        <td>
                            {{ $animais->nascimento}}
                        </td>
                        <td>
                            {{ $animais->historico_clinico}}
                        </td>
                        <td>
                            <form action="{{  route('animal.destroy', $animais->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection