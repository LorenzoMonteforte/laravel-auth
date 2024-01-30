<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($portfolios as $portfolios_item)
        <h1>{{ $portfolios_item->title }}</h1>
        <p>{{ $portfolios_item->description }}</p>
        <img src="{{ $portfolios_item->thumb }}" alt="">
    @endforeach
</body>

</html>
