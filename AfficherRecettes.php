<?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Affichage des recettes
        </title>
    </head>
    <body style="text-align:center">
        <h1>Affichage des recettes</h1>
        <ul>
            <?php 
            foreach($recipes as $recipe) {
                if ($recipe['is_enabled']==true){
                    foreach ($users as $user){
                        if ($recipe['author']==$user['email']){
                            echo '<h2>'.$recipe['title'].'</h2>'. $user['full_name']. '('.$user['age'].') '.'<br><br>';
                        }
                    }
                }
            }
            ?>
        </ul>
    </body>
</html>