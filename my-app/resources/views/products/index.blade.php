<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
</head>

<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
        @endforeach
    </ul>
</body>

</html>
