<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_menu.css">
</head>
<body>
    <div class="formayuda">

    <form action="send" method="POST">
        <h2>¿Tienes alguna duda?</h2>
        <br>
        <input type="text" name="nombre" placeholder="⠀⠀Nombre">
        <br><br>
        <input type="email" name="correo" placeholder=" ⠀⠀Correo">
        <br><br>
        <h4> Escribe aquí tu consulta </h4>
        <br>
        <textarea rows="20" cols="60" name="consulta" placeholder="Consulta">
        </textarea>
        <br><br>
        <input type="submit" name="enviar" value="Enviar">

    </form>

</div>
</body>
</html>