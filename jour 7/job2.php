<?php
function bonjour($jour) {
 if ($jour == true){
    echo "Bonjour";
 }
 if ($jour == false){
    echo "Bonsoir";
 }
}


/* $estJour = true; */
bonjour(true); 
echo '<br />';
/* $estNuit = false; */
bonjour(false); 



?>