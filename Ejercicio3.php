<html>
<head>
    <title>Formulario</title>
</head>
<body>
<center>
    <H1>Factorial de un Numero Natural</H1>
    
    <form action="Ejercicio3.php" method="post">
        <table>
            <tr><td>Ingrese el numero:  </td><td><input type="text" name="n1"/></td></tr>
        </table>
        <p>
          <INPUT TYPE="submit" VALUE="Compara"> 
          <INPUT TYPE="reset" VALUE="Limpia">
        </p>
    </form>
<p>
<?php 
if(isset($_REQUEST['n1'])){
$n1=$_POST['n1'];
$j=$n1;
$i=1;
while($n1<>0)
{	$i=($n1*$i);
$n1--;
}
echo "<p>El factorial de ".$j." es: ".$i."</p>\n";

}
?>
</p>
</center>
</body>
</html>

