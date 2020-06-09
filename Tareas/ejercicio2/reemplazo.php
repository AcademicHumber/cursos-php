  <?php
        $message= strtolower($_GET["message"]);
        $suprimir= strtolower($_GET["suprimir"]);
    
        $cadena= str_replace($suprimir,"", $message);
        
        echo "<hr>";
        echo "<h2>$cadena</h2>";
        echo "<hr>";
?>
