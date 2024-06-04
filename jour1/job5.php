<?php
// initialisation de i a 1 pour commencer a 1 
// <= est la condition tant que la valeur de i est infinrieur a 1 la boucle for continue
// i++ incrrementation de 1 apres chaque boucle
for ($i = 1; $i <= 1337; $i++) {
    if ($i == 26 or $i == 37 or $i == 88 or $i == 1111) {
        echo "<span style='display: none;'>" . $i . "</span>"; 
    
    } else {
        echo $i . "\n"; 
    }
}
?>