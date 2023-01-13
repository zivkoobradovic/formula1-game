<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome {{ $details['username'] }}</h1>
    <p>Your code is {{ $details['code'] }}</p>
    <p>Your result is {{ $details['result'] }}</p>
    <p>Link to view your <a href="{{ $details['result_url'] }}">Result</a></p>
    <div>
        {!! QrCode::size(200)->generate($details['code']) !!}
    </div>
</body>
</html>
