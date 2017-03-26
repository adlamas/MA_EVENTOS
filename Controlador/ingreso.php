<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingreso php</title>
    </head>
    <body>
        <?php
        
        $nombre = $_POST[addslashes('nombre')];
        $apellido = $_POST['apellido'];
        $password = $_POST['password'];
       
        //echo $nombre;
        
       try{ 
       $conexion = new PDO('mysql:host=localhost;dbname=app_web','root','');
       
       }
       catch(Exception $e){
           echo $e->getMessage();
       }
       
       $sql = "SELECT * FROM usuarios WHERE nombre = '".$nombre."'and password = '".$password."' ";
       $resultados = $conexion->query($sql);
       
//       while($resultado = $resultados->fetch(PDO::FETCH_NUM)){
//           echo '<div style="color: blue">Nombre: ' . $resultado[1] . '</div>' . 
//                   '<div style="color: red"> Apellido: ' . $resultado[2] . '</div>' . '<br>';
//       }
     
        if($resultados->fetch(PDO::FETCH_ASSOC)){
            echo "Bienvenido/a señor/a " . $nombre; 
        }else
            echo "Ud. no se registró";
        ?>
    </body>
</html>
