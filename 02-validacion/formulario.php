<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .w-label{
            display: block;
        }
    </style>
    <title>Validación de datos con php</title>
</head>
<body>
    
    <?php
        // $_GET["error"]=null; 
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        if($_GET["error"]=="si"){
           echo "<span style=\"color: #f00; font-size:2em;\">VERIFICA TUS DATOS</span>"; 
        }
    
    ?>
    <h1>Formulario de datos GET</h1>
    <form name="valida_datos_get_form" action="validar-datos.php" 
        method="get" enctype="application/x-www-form-urlencoded">
        
        <label class="w-label" for="">Nombre</label>
        <input type="text" name="nombre_txt"/>

        <label class="w-label" for="">Password</label>
        <input type="password" name="password_txt"/>

        <label class="w-label" for="">Sexo</label>
        
        <label for="">Masculino</label>
        <input type="radio" name="sexo_rdo" value="M">
        
        <label for="">Femenino</label>
        <input type="radio" name="sexo_rdo" value="F">

        </br>

        <input type="hidden" name="enviar_hdn" value="get">
        <input id="enviar-get" onclick="validarDatosGET()" type="button" name="enviar_btn" value="Envia-GET">
    
    </form>

    <h1>Formulario de datos POST</h1>
    <form name="valida_datos_post_form" action="validar-datos.php" 
        method="post" enctype="application/x-www-form-urlencoded">
        
        <label class="w-label" for="">Nombre</label>
        <input type="text" name="nombre_txt"/>

        <label class="w-label" for="">Password</label>
        <input type="password" name="password_txt"/>

        <label class="w-label" for="">Sexo</label>
        
        <label for="">Masculino</label>
        <input type="radio" name="sexo_rdo" value="M">
        
        <label for="">Femenino</label>
        <input type="radio" name="sexo_rdo" value="F">

        </br>

        <input type="hidden" name="enviar_hdn" value="post">
        <input id="enviar-post" onclick="validarDatosPOST()" type="button" name="enviar_btn" value="Envia-POST">
    
    </form>
    

</body>
<script>
    const d = document;
    
    function validarDatosGET()
    {
        let verificar = true;

        if(!d.valida_datos_get_form.nombre_txt.value){
            alert("El campo nombre es requerido");
            d.valida_datos_get_form.nombre_txt.focus();
            verificar = false;
            
        }else if(!d.valida_datos_get_form.password_txt.value){
                alert("El campo password es requerido");
                d.valida_datos_get_form.password_txt.focus();
                verificar = false;
            
        }else if(!d.valida_datos_get_form.sexo_rdo[0].checked &&
                    !d.valida_datos_get_form.sexo_rdo[1].checked){
                    alert("El campo sexo es requerido");
                    d.valida_datos_get_form.sexo_rdo[0].focus();
                    verificar = false;
                }
                
        if(verificar){
            d.valida_datos_get_form.submit();
        }
    }

    // window.onload = function(){
    //     d.getElementById("enviar-get").onclick = validarDatosGET;
    //      d.getElementById("enviar-post").onclick = validarDatosPOST;
    // }


    
    function validarDatosPOST()
    {
        let verificar = true;

        if(!d.valida_datos_post_form.nombre_txt.value){
            alert("El campo nombre es requerido");
            document.valida_datos_post_form.nombre_txt.focus();
            verificar = false;
            
        }else if(!d.valida_datos_post_form.password_txt.value){
                alert("El campo password es requerido");
                document.valida_datos_post_form.password_txt.focus();
                verificar = false;
            
        }else if(!d.valida_datos_post_form.sexo_rdo[0].checked &&
                    !d.valida_datos_post_form.sexo_rdo[1].checked){
                    alert("El campo sexo es requerido");
                    document.valida_datos_post_form.sexo_rdo[0].focus();
                    verificar = false;
                }
                
        if(verificar){
            d.valida_datos_post_form.submit();
        }
    }

    // window.onload = function(){
    //     d.getElementById("enviar-post").onclick = validarDatosPOST;
    // }

    </script>
</html>