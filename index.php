<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
    <form action="" method="get">
        Digite o número maximo: <input type="number" name="maxNumber" />
        <input type="submit" name="submit" value="enviar" />
    </form> 
 <?php

$n = $_GET['maxNumber'];
 
for($i = 1; $i <= $n; $i++)
{
    $divisores = 0;

    for($j = $i; $j >= 1; $j--)
    {
        if (($i % $j) == 0) {
            $divisores++;
        }
    }
    
    if ($divisores == 2)
    {
        echo $i . ', ';
    }
}
 ?>
 </body>
</html>