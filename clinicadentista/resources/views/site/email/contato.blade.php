<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato Email site Academia Via Bem</title>
</head>
<body>

    <h1>Contato Email Academia Viva Bem</h1>

    <h2>Nome: {{ $contato->nomeContato }}</h2>
    <h2>Email: {{ $contato->emailContato }}</h2>
    <h2>Fone: {{ $contato->foneContato }}</h2>
    <h2>Assunto: {{ $contato->assuntoContato }}</h2>
    <h2>Mensagem: {{ $contato->mensContato }}</h2>

</body>
</html>
