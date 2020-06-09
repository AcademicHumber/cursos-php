<html>
    <head>
        <title>Tablas</title>
    </head>
    <body>
   <?php
   $i=1;
   echo "Tabla 1 al 10";
   while ($i<11){
   echo "<table border=1>";
   echo "<tr>";
   echo "<td>Tabla del $i </td>";
   echo "</tr>";
   for($a=1; $a<11;$a++){
   echo "<tr>";
     echo "<td>$i </td>";
     echo "<td> * </td>";
     echo "<td> $a </td>";
     echo "<td> = </td>";
    $mult = $i*$a;
     echo "<td> $mult </td>";
     echo "</tr>";
   }
   echo "</table>";
   echo "</tr>";
   $i++;
   }
   
     echo "Tabla de números pares";
      $i=2;
   while ($i<51){
   echo "<table border=1>";
   echo "<tr>";
   echo "<td>Tabla del $i </td>";
   echo "</tr>";
   foreach (range(1, 11) as $a ){
   //for($a=1; $a<11;$a++){
   echo "<tr>";
     echo "<td>$i </td>";
     echo "<td> * </td>";
     echo "<td> $a </td>";
     echo "<td> = </td>";
    $mult = $i*$a;
     echo "<td> $mult </td>";
     echo "</tr>";
   }
   echo "</table>";
   echo "</tr>";
   $i=$i+2;
   }
   

   ?>
       
    
        
        
    </body>
</html>
