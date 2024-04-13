<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>modifier utilisateur</h1>
    <form action="{{ url('utilisateurs'.'/'.$utilisateur->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="">nom</label>
        <input type="text" name="nom" value="{{$utilisateur->nom}}">

        @if($errors->has('nom'))
        <span class="text-danger">{{ $errors->first('nom') }}</span>
        @endif
        <br>

        <label for="">prenom</label>
        <input type="text" name="prenom"  value="{{$utilisateur->prenom}}">
        @if($errors->has('prenom'))
        <span class="text-danger">{{ $errors->first('prenom') }}</span>
        @endif
        <br>

        <label for="">email</label>
        <input type="email" name="email" value="{{$utilisateur->email}}">
        @if($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        <br>

        <label for="">role</label>
        <select name="role"  value="{{$utilisateur->role}}">
            <option value="Admin">Admin</option>
            <option value="visiteur">Visiteur</option>
        </select>
        @if($errors->has('role'))
        <span class="text-danger">{{ $errors->first('role') }}</span>
        @endif
        <br>


        <label for="">etat</label>
        <select name="etat"  value="{{$utilisateur->etat}}">
            <option value="active">active</option>
            <option value="disactive">disactive</option>
        </select>
        @if($errors->has('etat'))
        <span class="text-danger">{{ $errors->first('etat') }}</span>
        @endif
        <br><br>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
