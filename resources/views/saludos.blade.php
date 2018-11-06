<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Saludos {{$nombre}}</h1>

    @foreach($opciones as $opcion)
        <li>{{$opcion}}</li>
    @endforeach

    <?php foreach($opciones->result() as $row){?>
        <li><?php echo $row?></li>
    <?php }?>
    
</body>
</html>