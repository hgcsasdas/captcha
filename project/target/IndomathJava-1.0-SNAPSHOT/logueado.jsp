<!--
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script class="sweetAlertFunctions">
    function correctLogin(){
        Swal.fire({
            icon: 'success',
            title: 'Te has registrado satisfactoriamente!',
            showConfirmButton: false,
            timer: 1500
        });
    }

    function failedLogin(){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ya te encuentras registrado en nuestro sistema!'
        });
    }

</script>
<?php
require "php/modelo/Usuario.php";
require "php/modelo/users.bd.php";

if(isset($_POST) && !empty($_POST)) {
    session_start();
    echo session_id();
}
?>
-->
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html lang="es">

<%@include file="Includes/head.jsp" %>
<%@include file="Includes/nav.jsp" %>
<script>
    function verificarDatos(){
        validarVacio();
    }
    function validarVacio(){

        let formu = document.registro;
        let ok = true;
        let cont = 0;
        while (ok == true && cont < formu.getElementsByTagName('input').length ){

            if(formu.getElementsByTagName('input')[cont].value == ""){
                ok = false;
            }
            cont++;
        }
        if(formu.getElementsByTagName('select')[0].value <1 || formu.getElementsByTagName('select')[0].value >5){
            ok=false;
        }

        //validar

        if(ok){
            formu.submit();
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No has llenado todos los campos!'
            })
        }

    }

</script>
    <body>
   <!-- <?php include "Includes/nav.php"?>

    <?php

    if(isset($_POST) && !empty($_POST)){
        $html ="<div>";
        foreach ($_POST as $item =>$value){
            $html.=$value;
        }
        echo $html."</div>";
    }

?>
-->

    <%@include file="Includes/footer.jsp" %>
</body>
</html>