<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{$name}}, you are {{$age}} years old</h1>   
    <h1>I am content of profile.blade.php</h1>
</body>
</html>
<?php
echo "<h2> The name is $name and age is $age</h2>";
?>