<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        label {
            display: block;
            padding-left: 15px;
            text-indent: -15px;
        }
    </style>
    <title>Envio de datos por GET y POST</title>

</head>
<body>
    
    <h1>Formulario enviado por el método GET</h1>
    
    <!-- -->
    <form action="envio_datos.php" name="envia-get_frm" method="get" enctype="application/x-www-form-urlencoded">
        <label class="box" for="">Nombre</label>
        <input class="box" type="text" name="nombre_txt"/>

        <label for="">Password</label>
        <input type="password" name="password_txt"/>

        <input type="submit" name="enviar_btn" value="Enviar"/>
    </form>

    <form action="envio_datos.php" name="envia-post_frm" method="post" enctype="application/x-www-form-urlencoded">
        <label for="">Nombre</label>
        <input type="text" name="nombre_txt"/>
        
        <label for="">Password</label>
        <input type="password" name="password_txt"/>

        <input type="submit" name="enviar_btn" value="Enviar"/>
    </form>
    
</body>
</html>