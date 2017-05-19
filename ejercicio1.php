<html>
<head>
    <title>Formulario</title>
</head>
<body>
<center>
    <H1>Hallar el numero mayor de dos numeros naturales</H1>
    
    <form action="ejercicio1.php" method="post">
        <table>
            <tr><td>El primer numero:  </td><td><input type="text" name="n1"/></td></tr>
            <tr><td>El segundo numero: </td><td><input type="text" name="n2"/></td></tr>
        </table>
        <p>
          <INPUT TYPE="submit" VALUE="Compara"> 
          <INPUT TYPE="reset" VALUE="Limpia">
        </p>
    </form>
<p>
<?php 
if(isset($_REQUEST['n1']) && isset($_REQUEST['n2'])){
$n1=$_POST['n1'];
$n2=$_POST['n2'];
if ($n1>$n2){
    echo "El primer numero (".$n1.") es mayor ";
    echo "<br>";
    echo "El segundo numero (".$n2.") es menor ";
}
    elseif ($n2 > $n1) {
    
    echo "El segundo numero (".$n2.") es mayor ";
    echo "<br>";
    echo "El primer numero (".$n1.") es menor ";
    echo "<br>";
}
}
?>
</p>
</center>

</body>
</html>
