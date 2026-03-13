<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header> <h1>Lista de vetores</h1></header>
<nav> </nav>
<main>
<table>

<form action="index.php" method="post">
<tr>
<td> listar nomes de :</td>
<td> <input type="number" name="de"></td>
<td>até:</td>
<td> <input type="number" name="ate"></td>
 </tr>
 <tr>
<td> </td>
<td> <input type="reset" value="Apagar"></td>
<td></td>
<td><input type="submit" value="Listar"></td>
 </tr>


</form>
</table>
<?php

 $nomes = array("André","Bruno","carlos","daniel","elias","fabio","geraldo","helio","igor","joao");
 if(isset($_POST["de"])){
     $de = $_POST["de"];
 }
 else{
     $de = null;
 }

 if(isset($_POST["ate"])){
    $ate = $_POST["ate"];
}
else{
    $ate= null;
}
if($de !=null and $ate !=null){
    $x = $de;
    while($x <= $ate){
        echo"<p>$nomes[$x]</p>";
        $x++;
        
    }
}



?>

</main>


<footer>@copy- Gabriel Pires</footer>
    
</body>
</html>
