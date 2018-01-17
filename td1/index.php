<?php
require_once ('biblio.php');
require_once('livre.php');
$biblio=new Biblio("bibliothèque centrale");
$livre1=new Livre('harry potter',2000);
$livre2=new Livre('harry potter2',2002);
$biblio->livres[]=$livre1;
$biblio->livres[]=$livre2;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TD1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?= $biblio-> nom?> </h1> 
       
       <table>
           <tr>
               <th> Titre </th>
               <th> Annee </th>
           </tr>
           <?php foreach($biblio ->livres as $livre){?>
          <tr>
               <td><?=$livre->titre?>
               </td>
               <td><?=$livre->annee?>
               </td>
           <?php }?>
            </table>
    </body>
</html>