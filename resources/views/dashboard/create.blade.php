@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <form action="{{ route('cliente.store') }}" method="post" class="form">
        @csrf
        @include('form.form_all')
    </form>
@endsection