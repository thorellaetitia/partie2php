<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_3 partie 2-php</title>  
     </head>
    
<body>
    <h1>exercice_3 partie 2 php </h1>
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :

    Homme
    Femme

En fonction de l'âge et du genre afficher la phrase correspondante :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas.     </p>

    <?php
//declaration de la variable
        
    $age=18;
    $gender='femme';
   
    
    if ($age>=18 && $gender=='femme'){
        echo 'Vous êtes une femme majeure'; 
    } else {
        echo 'Vous êtes une femme mineure'; 
    }
      
    
     if ($age<18 && $gender=='homme'){
        echo 'Vous êtes un homme mineur'; 
    }else {
        echo'Vous êtes un homme majeure'; 
     }
     
    ?>
     
</body>
</html>
