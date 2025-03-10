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
        Cadastrar Usuário
    </h2>

    <form action="{{route('user-store')}} " method="POST">
        @csrf
        @method('POST')

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome completo"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="E-mail"><br><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha (Min.: 6 caracteres)"><br><br>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>
