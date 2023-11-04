<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACL LARAVEL</title>
</head>
<body>
    <h2>ADMINISTRADOR</h2>

    @can('create.admin')
        <a href="">Create Admin</a>
    @endcan

    @can('list.admin')
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    @endcan
</body>
</html>