<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Available fruits are</h1>
    @foreach ($fruits as $fruit)
        <div style="color: brown">{{$fruit}}</div>
        <li>{{ $fruit }}</li>
    @endforeach
    <i>Displayed by fruits.blade.php</i> <br>
</body>
</html>
<?php 
print_r($fruits);
?>