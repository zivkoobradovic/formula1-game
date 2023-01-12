<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>GAME {{ $player->slug }}</h1>

    <form action="{{ route('end-game', ['player' => $player->slug]) }}" method="POST">
        @csrf
        <input type="text" name="result">
    </form>
</body>

</html>
