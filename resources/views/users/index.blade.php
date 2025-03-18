<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Api</title>
</head>
<body>
    <a href="{{route('user.create')}}">Cadastrar</a><br>
    <h2>
        Listar usuários
    </h2>

    @if(session('success'))
        <p style="color: #086;">
            {{ session('success') }}
        </p>
    @endif

    @forelse ($users as $user)
        Id: {{ $user->id }} <br>
        Nome: {{ $user->name }} <br>
        E-mail: {{ $user->email }} <br>
        
        <a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a>
        <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
        <hr>
    @empty
    @endforelse

</body>
</html>