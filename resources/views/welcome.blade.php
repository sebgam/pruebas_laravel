<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>inicio</title>
    <link href="{{aset ('public/img/resouses')}}">
</head>
<body>
    
<h1></h1>
<form action="" method="POST">
    <input type="text" name="usuario" id="user">
    <input type="text" name="contraseña" id="pass">
    <input type="password" name="restPassword">
    <input type="submit" name="lista" id="lista" >
    <input type="reset" name="reset" id="reset">


    <select name="opciones" id="option">
        <option value="01">option_1</option>
        <option value="02">option_2</option>
        <option value="03">option_3</option>
        <option value="04">option_4</option>
</select>

<textarea name="comentarios" id="comet" cols="40" rows="20"></textarea>
<button value="enviar">Enviar</button>
<button value="volver">Volver</button>

</form>


<script>


    var user == 'user';
    var usuario = document.getElementById('user');

    if (usuario == user){
        alert("la nueva contraseña se envio a su correo electronico");
    }else{
        alert("usuario incorrecto intente nuevamente");
    }



</script>



</body>
</html>