<?php  
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collections</title>
    <link rel="stylesheet" href="css/index.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
</head>
<body>
<div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Seleccionar
                </div>
    <form id="loginform" action="index.html" method="POST">
        <input type="button" value="Peliculas" onclick="location='Collections/Peliculas.php'">

        <input type="button" value="Series" onclick="location='Collections/Series.php'">


        <input type="submit" value="Salir" href="index.html">
    </form>
   </div>
</div>
</div>
</body>
</html>