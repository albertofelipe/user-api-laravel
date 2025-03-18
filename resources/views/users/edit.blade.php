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
    <a href="{{route('user.show', ['user' => $user->id])}} ">Visualizar</a><br>
    
    <h2>
        Editar Usuário
    </h2>

    @if($errors->any())
    @foreach($errors->all() as $error)
    <p style="color: #f00;">
        {{ $error }}
    </p>
    @endforeach
    @endif

    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome completo" value="{{old('name', $user->name) }}"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="E-mail" value="{{old('email', $user->email) }}"><br><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha (Min.: 6 caracteres)" value="{{old('password') }}"><br><br>

        <button type="submit">Salvar</button>
    </form>

</body>
</html>