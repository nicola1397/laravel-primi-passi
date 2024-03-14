<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO LARAVEL!</h1>
<p> @forelse($count as $counts)
    {{ $counts }}
    @unless ($loop->last)
    ,
    @endunless
    @empty
    Vuoto
    @endforelse
</p>
</body>
</html>