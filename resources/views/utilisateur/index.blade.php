<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout.layout')
    @section('utilisateurs')

    <h1>Liste D'utilisateur</h1>
    <a href="{{url('/utilisateurs/create')}}">ajouter user</a>

   {{--  <div class="search">
        <div class="show">
            show <input type="number"> entries
        </div>
        <div class="search">
            <form action="{{url('utilisateurs')}}" method="get">
                @csrf
                <label for="">Search</label>
                <input type="search" name="query" value="{{ request('query') }}">
                <button type="submit">search</button>
            </form>
        </div>
    </div> --}}
    <table>
        <thead>
            <tr>
                <th>nom </th>
                <th>prenom</th>
                <th>email</th>
                <th>role</th>
                <th>etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($utilisateurs as $utilisateur)
            <tr>
                <td>{{$utilisateur->nom}}</td>
                <td>{{$utilisateur->prenom}}</td>
                <td>{{$utilisateur->email}}</td>
                <td>{{$utilisateur->role}}</td>
                <td>{{$utilisateur->etat}}</td>
                <td>
                    <form action="{{url('utilisateurs'.'/'.$utilisateur->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">supprimer</button>
                    </form>

                </td>
                <td>
                    <a href="{{ url('utilisateurs/' . $utilisateur->id . '/edit') }}" >
                        <button >Edit </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>
