<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    @for ($i=0; $i<sizeof($portfolios); $i++)
        <div>{{ $portfolios[$i]["title"] }}</div>
        <div>{{ $portfolios[$i]["description"] }}</div>
        <img src="{{ $portfolios[$i]["thumb"] }}" alt="">
    @endfor
</body>
</html>