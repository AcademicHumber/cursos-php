<pre>
 <?php           
  echo "POST <br>";
  print_r($_POST);
  echo "<br>";
  print_r($_FILES);
  
  
  session_start();
  
  unset($_SESSION["Facil"]);
  print_r($_SESSION);
  
 ?>
</pre>
