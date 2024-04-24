<?php
include("conexion.php");
if(isset($_POST["registro"])){
    $nombre = $_POST ["nombre"];
    $correo = $_POST ["correo"];
    $telefono = $_POST ["telefono"];
    $experiencia = $_POST ["experiencia"];
    $formacion = $_POST["formacion"];
    $certificados = $_POST["certificados"];
    $idioma = isset($_POST['idiomas']) ? $_POST['idiomas'] : [];
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
    $perfil = $_POST["perfil"];
 
    $experiencia = implode('\n', $experiencia);
    $habilidades = implode('\n', $habilidades);
    $idioma = implode('\n', $idioma);
    $certificados = implode('\n', $certificados);

    $insertardatos = "INSERT INTO registras_datos VALUE ('$nombre','$correo','$telefono', '$experiencia','$formacion','$certificados','$idioma', '$habilidades','$perfil', '')";
    $ejecutar_insertar = mysqli_query($conexion, $insertardatos);

    if($ejecutar_insertar) {
        echo "\n\nlos datos se han insertado correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}   
?>