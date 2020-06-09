 <?php
        $message= strtolower($_GET["message"]);
        
        $cadena_ordenar= str_split($message);
        $cadena_ordenada= str_split($message);
     
        sort($cadena_ordenada);
        
        if($cadena_ordenada==$cadena_ordenar){
            echo "<hr>";
            echo "<h2>Esta ordenado</h2>";
            echo "<hr>";
        }
        else{
            echo "<hr>";
            echo "<h2>No esta ordenado</h2>";
            echo "<hr>";
        }
        
        