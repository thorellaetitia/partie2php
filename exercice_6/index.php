<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_6 partie 2-php</title>  
     </head>
    
<body>
    <h1>exercice_6 partie 2 php</h1>
    <p>Traduire ce code avec des if et des else :

<!--Traduire ce code avec des if et des else :

  echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
 -->
 </p>        
     
    <?php
//declaration de la variable
        
    $age=12;
    
   if ($age>=18){
       echo 'Tu es majeur';
                        } else {
       echo 'Tu n\'est pas majeur';
                               }
   
    ?>
   
     
</body>
</html>