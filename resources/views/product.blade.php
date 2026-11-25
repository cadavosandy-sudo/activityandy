
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

</head>
<body bgcolor="#8EBA72"></body>
  <style>
     
        body {
            font-family: sans-serif;
        }
    </style>
    <h1>Product page</h1>
    <h2>in.green</h2>

<h1>Our Products</h1>

<img src="{{ asset('img/item1.jpg') }}" width="180">
<h3>Item 1</h3>

<img src="{{ asset('img/item2.jpg') }}" width="180">
<h3>Item 2</h3>

<img src="{{ asset('img/item3.jpg') }}" width="180">
<h3>Item 3</h3>




    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">about</a>

</body>
</html>
