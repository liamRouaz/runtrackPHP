<?php
// initialisation de i a 1 pour commencer a 1 
// <= est la condition tant que la valeur de i est infinrieur a 1 la boucle for continue
// i++ incrrementation de 1 apres chaque boucle
for ($i = 1; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        echo "<i>" . $i . "</i>";
    }if ($i >= 25 && $i <= 50) {
        echo "<u>" . $i . "</u>";
    }if ($i == 42 ) {
        echo "La Plateforme_" ; 
    
    } else {
        echo $i . "\n"; 
    }
}
?>