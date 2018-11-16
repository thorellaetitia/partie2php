<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_2 partie 2-php</title>  
     </head>
    
<body>
    <h1>exercice_2 partie 2 php </h1>

    <?php
//declaration de la variable
        
    $iseasy=false;
    
    if ($iseasy) 
    {
        echo 'C\'est facile !'; 
    }
     else // sinon
     {
         echo 'c\'est difficile !'; 
     }
      
     
    //affichage variable avec echo
     ?>
    
    <?= $iseasy ? 'c\'est facile !' : 'c\'est difficile!'?>
    
    
</body>
</html>