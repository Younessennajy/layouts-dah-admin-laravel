<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>create User</h1>
<form action="{{ url('/utilisateurs') }}" method="POST">
    @csrf
    <label for="">nom</label>
    <input type="text" name="nom" id="">

    @if($errors->has('nom'))
    <span class="text-danger">{{ $errors->first('nom') }}</span>
    @endif
    <br>

    <label for="">prenom</label>
    <input type="text" name="prenom" id="">
    @if($errors->has('prenom'))
    <span class="text-danger">{{ $errors->first('prenom') }}</span>
    @endif
    <br>

    <label for="">email</label>
    <input type="email" name="email" id="">
    @if($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
    <br>

    <label for="">role</label>
    <select name="role" id="">
        <option value="Admin">Admin</option>
        <option value="visiteur">Visiteur</option>
    </select>
    @if($errors->has('role'))
    <span class="text-danger">{{ $errors->first('role') }}</span>
    @endif
    <br>


    <label for="">etat</label>
    <select name="etat" id="">
        <option value="active">active</option>
        <option value="disactive">disactive</option>
    </select>
    @if($errors->has('etat'))
    <span class="text-danger">{{ $errors->first('etat') }}</span>
    @endif
    <br><br>
    <button type="submit">Save</button>
</form>
</body>
</html>
