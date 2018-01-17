<?php
$couleur="bleue";
echo 'Une fleur $couleur'; // Bof
echo "<br/>";
echo "Une fleur $couleur"; // OK mais...
echo "<br/>";
//echo "Des fleurs $couleurs"; // Erreur
echo "Des fleurs ".$couleur."s"; // OK
echo "<br/>";
echo "Des fleurs {$couleur}s";
