<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Api</title>
</head>
<body>
    <a href="{{route('user.index')}} ">Listar</a><br>
    
    <h2>
        Visualizar Usuário
    </h2>

    Id: {{ $user->id }} <br>
    Nome: {{ $user->name }} <br>
    E-mail: {{ $user->email }} <br>
    Cadastrado: {{ $user->created_at }} <br>

</body>
</html>