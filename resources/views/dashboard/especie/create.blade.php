@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <form action="{{ route('especie.store') }}" method="post" class="form">
        @csrf
        @include('form.form_raca_especie')
    </form>
@endsection