@extends('layouts.app')

@section('title', 'Listagem do usuário')
    

@section('content')
    <h1>
        Listagem de Usuarios (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="GET">
        <input type="text" name="search" placeholder="Buscar por:">
        <button>Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }} -
                <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            </li>
        @endforeach
    </ul>
    
@endsection