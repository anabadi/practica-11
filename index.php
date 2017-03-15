<html>
<head>
<title>Practica11</title>

</head>
<body>



<?php

//Antonio de Jesús González Pineda
//Usando variables PHP

echo "<h1>Variables </h1>";
$nombre='Antonio de Jesús ';  //tipo cadenas
$apellido='González Pineda';
$edad= 22;
$salario=12500.50;
$fechaNacimiento='11/09/1994';
$estatus=true;


echo $nombre.'<br/>';
echo $apellido.'<br/>';
echo 'nombre completo: '.$nombre.' '.$apellido.'<br/>';
echo 'Tu edad es: '.$edad.'<br/>';
echo 'Tu salario es: '.$salario.'<br/>';
?>
<h1>OPERADORES ARITMETICOS</h1>
<?php
   $a=5;
   $b=3;
   $suma=$a+$b;
   $resta=$a-$b;
   $multiplica=$a*$b;
   $divide=$a/$b;
   
   echo 'la suma de'.$a. '+' .$b. 'es: ' .$suma.'<br/>';
   echo 'la resta de'.$a. '-' .$b. 'es: '.$resta.'<br/>';
   echo 'la multiplicacion de'.$a. '*' .$b. 'es:'.$multiplica.'<br/>';
   echo 'la divicion de'.$a. '/' .$b. 'es: '.$divide.'<br/>';
   

?>
</body>
</html>

