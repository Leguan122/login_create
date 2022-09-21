<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<h1>Profile</h1>

<p>{{ $user->email }}</p>

<a href="/logout">Log out</a>

</body>
</html>

