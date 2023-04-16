<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        l'utente {{$user->name}} che vive in via: {{$user->address}} ha richiesto di diventare revisore.
    </h1>
    <a href="{{route('make.revisor', compact('user'))}}">Rendi Revisore</a>

</body>
</html>