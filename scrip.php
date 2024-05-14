<link rel="stylesheet" href="./style.css">
<?php
//validar Nombre
if(empty(!$_REQUEST['name'])){
$nombre = $_POST['name'];
}else{ 
    $nombre = NULL;
    echo"<p>Olvidaste Registrar tu Nombre</p>";
}
//Validar correo 
if(empty(!$_REQUEST['email'])){
    $correo = $_POST['email'];
    }else{ 
        $correo = NULL;
    echo"<p>Olvidaste Registrar tu Correo</p>";
    }

    //Validar comentario
if(empty(!$_REQUEST['comments'])){
    $comments = $_POST['comments'];
    }else{ 
        $comments = NULL;
    echo"<p>Olvidaste Registrar un comments</p>";
    }

if(isset($_POST['gender'])){
        $genero = $_POST['gender'];
        if($genero == 'M'){
            $saludo = "<p><strong>Que tenga un buen día, señor</strong></p>";
        } elseif($genero == 'F') {
            $saludo = "<p><strong>Que tenga un buen día, señora</strong></p>";
        } else {
            $saludo = "<p><strong>No especificó su género</strong></p>";
        }
    } else {
        $genero = NULL;
        echo "<p>Olvidaste registrar tu género</p>";
    }

    // Validar Edad
if(isset($_POST['age'])){
    $edad = $_POST['age'];
} else {
    $edad = NULL;
    echo "<p>Olvidaste registrar tu edad</p>";
}

// cada edad debe tener 3 saludos 


//$correo = $_POST['email'];
//$comments = $_POST['comments']; // Agregar esta línea para capturar el valor de los comentarios

//if(isset($_REQUEST['gender'])){
//    $genero = $_REQUEST['gender'];
//}else{
  //  $genero = null;
//}

// Imprimimos los datos del formulario recibido
//echo "<p> Gracias por visitar Senati <strong>".$nombre."</strong>, gracias por el comentario: </p>
//<pre>.$comments </pre>
//<p> Te enviaremos la respuesta al correo <em>$correo</em></p>";

//if ($genero == 'M'){
//   echo "<p><strong>Que Tenga un Buen Dia Señor</strong></p>";
//}elseif($genero =='F'){
//    echo "<p><strong>Que Tenga un Buen Dia Señora</strong></p>";
//}else{
//    echo "<p><strong>Olvido registrar su genero</strong></p>";
//}

// Imprimir los datos del formulario recibido
if($nombre && $correo && $comments && $genero && $edad){
    echo "<p>Gracias por visitar Senati <strong>".$nombre."</strong>, gracias por el comentario: </p>
    <pre>".$comments."</pre>
    <p>Te enviaremos la respuesta al correo <em>".$correo."</em></p>";
    echo $saludo;
} else {
    echo "<p class='error'>Por favor, vuelve a llenar el formulario correctamente</p>";
}
?>
