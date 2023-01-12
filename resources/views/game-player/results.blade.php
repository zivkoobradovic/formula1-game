

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }

        div#social-links ul li {
            display: inline-block;
        }

        div#social-links ul li a {
            padding: 20px;
            border: 1px solid rgb(9, 197, 75);
            border-radius: 10px;
            margin: 1px;
            font-size: 30px;
            color: #222;
            background-color: rgb(9, 197, 75);
        }
    </style>
</head>

<body>
    <div class="container bg-gray-200">
        <h1>{{ env('APP_NAME') }}</h1>
        <h1>{{ $player->email }}</h1>
        <h1>{{ $player->result }}</h1>
    </div>
    <div class="container mt-4">
        {!! $shareComponent !!}
    </div>


</body>

</html>
