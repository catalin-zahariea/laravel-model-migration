<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travels</title>
</head>
<body>
    
    <h1>Our travel offers</h1>

    <ul>
        @foreach ($travels as $travel)
            <li>
                <div>Name: {{ $travel->name }}</div>

                @if ($travel->descriptiom)
                <div>Description: {{ $travel->description  }}</div>
                @endif

                <div>Price: {{ $travel->price }}</div>

                <div>Destination: {{ $travel->destination  }}</div>
            </li>
        @endforeach
    </ul>

</body>
</html>