<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!doctype html>
<html lang="es">


<%@include file="Includes/head.jsp" %>
<%@include file="Includes/nav.jsp" %>
<link rel="stylesheet" href="Css/claseStyle.css">

<!--
<?php
include "Includes/nav.php";
require "php/modelo/Usuario.php";
require "php/modelo/classes.bd.php";
require "php/Controlador/Controller.php";
?>

<?php
if (isset($_GET) && !empty($_GET)){

    $controller = new controller();

   // $exito =  $controller->leerEnDB("classes", $_GET);
    $clases =  $controller->leerEnDB("classes2", $_GET);
    echo "<script type='module'>imprimirClases(".$clases.")</script>";
    echo "<script type='module'>mostrarClase(".$clases.")</script>";

   /* foreach ($exito as $item=>$value){
        $$item = $value;
    }*/
    //$numLecciones = $numLecciones;
    //$id=$id_modulo;

}
  ?>
-->
<script>
    function mostrarClase(datos){
        datos = datos[0];
        let numLecciones = document.getElementById('lecciones1');
        numLecciones.innerHTML = datos['leccion'];
        let resumenTema = document.getElementById('resumenTema');
        resumenTema.setAttribute('href', "classAssetIntroduction.php?id="+datos['id_modulo']);
        document.querySelector(".tituloModulo").innerHTML = datos['titulo'];
        document.querySelector("#resumen").innerHTML = "<p>"+datos['resumen']+"</p>";
    }
    function imprimirClases(clases){
        let lecciones = document.querySelector(".listaLecciones");
        let leccion ="";
        for (let i =0; i<clases.length; i++) {
            leccion += '<li><a href="#" class="menuClases" onclick="desplegarSubmenu2()">Leccion '+(i+1)+' <strong>'+(parseInt(clases[i]["cduracion"])+parseInt(clases[i]["eduracion"]))+' min</strong><i class="fa-solid fa-angle-down"></i></></a><ul class="desplegableClases"><li><a href="classAsset.php?id='+clases[i]["id_modulo"]+'&c='+clases[i]["codigo_clase"]+'">Estudia<strong>'+clases[i]["cduracion"]+' min</strong></a></li><li><a href="examAsset.php?id='+clases[i]["codigo_examen"]+'">Practica<strong>'+clases[i]["eduracion"]+' min</strong></a></li></ul></li>';
        }
        lecciones.innerHTML = leccion;
    }
    /*function mostrarClase(modulo){
        modulo = modulo[0];
        document.querySelector(".tituloModulo").innerHTML = modulo['titulo'];
        document.querySelector("#resumen").innerHTML = "<p>"+modulo['resumen']+"</p>";
    }
*/
</script>
<main>
    <h1 class="tituloModulo"></h1>
    <aside class="claseContenido">
        <ul class="listaClases">
            <li><a id="resumenTema" href="#">Resumen del tema</a></li>
            <li id="lecciones">Lecciones <strong id="lecciones1"></strong></li>
            <ul class="listaLecciones"></ul>
        </ul>
    </aside>
    <section class="claseContenido">
        <div id="resumen">
        </div>
    </section>
</main>


<%@include file="Includes/footer.jsp" %>
</body>
</html>
