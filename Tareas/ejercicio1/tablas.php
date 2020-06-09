       
<?php
        $fila= $_GET["filas"];
        $columna= $_GET["columnas"];
        $multiplicacion=$fila*$columna;
         
         echo "<h2>Tabla generada</h2>";
         echo "<table border=1>";
           for ($i=0; $i < $fila ; $i++) { 
           echo "<tr></tr>";
               for ($j=0; $j < $columna ; $j++) { 
               echo "<td>$multiplicacion</td>";
              $multiplicacion--;
             }
           }
          echo "</table>";
        
       