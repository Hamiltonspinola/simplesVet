@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <form action="{{ route('cliente.update', $clientes->id) }}" method="post" class="form">
        @csrf
        @include('form.form_all')
    </form>
@endsection