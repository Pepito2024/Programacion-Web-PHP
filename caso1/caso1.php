<html>
<head>


    
    <title>DocumentCASO 1: GENERADOR DE TICKET</title>



</head>
<body>
    <form method="post" action=""><br>
    Ingrese nombre:<br>
    <input type="text" name="Nombre"><br>
    Ingrese el ticket:<br>
    <input type="text" name="codigo"><br>
    Ingrese la altura: <br>
    <input type="text" name="altura"><br>
    Ingrese la edad mayor a 16: <br>
    <input type="text" name="edad"><br>
    Problema de mantenimiento: <br>
    <input type="text" name="mantenimiento"><br>
    <input type="submit" value="EMITIR"><br>
</form>
 </body>
 <?php
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $mantenimiento3 = $_POST ['mantenimiento'];
    $Nombre = $_POST ['Nombre'];
    $codigo = $_POST ['codigo'];
 
 
 if ($altura>=1.20){
    echo "Con tu tamaño SI puedes entrar"."<br>"; 
 }else
 echo  " Con tu tamaño NO puedes entrar"."<br>";
 if ($edad>=16){
    echo "Con tu edad  SI puedes entrar"."<br>";
 }else
    echo "Con tu edad NO puedes entrar"."<br>";
if ($mantenimiento3="rechazo juicio"){
    echo "NO puedes proceder a juicios"."<br>";
}else if ($mantenimiento3="acepto jucio")  
    echo "Si no aceptas NO puedes ingresar"."<br>";



    echo "TU TIKET DE ENTRA ES : ".$codigo,$Nombre,$edad;
 ?>

	

</html>