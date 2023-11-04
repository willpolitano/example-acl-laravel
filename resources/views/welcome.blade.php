<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACL LARAVEL</title>
</head>
<body>
    <h2>CONVIDADOS</h2>

    @can('create.guest')
        <a href="">Create Guest</a>
    @endcan

    @can('list.guest')
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    @endcan
</body>
</html>