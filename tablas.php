<html>
    <head>
        <title>Tablas</title>
    </head>
    <body>
        <h1> TABLAS DE MULTIPLICAR </h1>
        <p> Tablas de todos los numeros pares hasta el 50</p>
     <?php
     $i=1;
     while ($i<11){     
     echo "<table border=1>";
     echo "<tr>";
     echo "<td>Tabla del $i </td>";
     echo "</tr>";     
     foreach(range(1, 11) as $a){
        echo "<tr>";
        echo "<td> $i </td>";
        echo "<td> * </td>";
        echo "<td> $a </td>";
        echo "<td> = </td>";
        $multiplicacion= $a*$i;
        echo "<td> $multiplicacion </td>";
        echo "</tr>";  
     }
     echo "</table>";
     echo "<hr>";
     $i++;
     }
     ?>

    </body>
</html>


