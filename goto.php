<?php

echo 'Este es un mesaje';
echo '<br>';
echo 'Este es otro mensaje';
echo '<br>';
// El goto salta el codigo y me lleva a la etiqueta
goto saltar_codigo;
echo 'Mensaje1';
echo '<br>';
echo 'Mensaje2';
echo '<br>';
echo 'Mensaje3';
saltar_codigo:
echo '<br>';
echo 'Este es otro mensaje';


