<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Lezione007/PalestraPokemon/resources/css/app.css, Lezione007/PalestraPokemon/resources/js/app.js --> 
    
    <title>Document</title>
</head>
<body>

    <x-nav /> 

    {{$slot}} 

</body>
</html>