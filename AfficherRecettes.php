<?php
    $recipes=[
        [
            'title'=>'Cassoulet',
            'recipe'=>'',
            'author'=>'mickael.andrieu@exemple.com',
            'is_enabled'=> true,],
        [
            'title'=>'Couscous',
            'recipe'=>'',
            'author'=>'mickael.andrieu@exemple.com',
            'is_enabled'=> false,
        ],
        [
            'title'=>'Escalope milanaise',
            'recipe'=>'',
            'author'=>'mathieu.nebra@exemple.com',
            'is_enabled'=> true,
        ]
    ];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Affichage des recettes
        </title>
    </head>
    <body>
        <ul>
            <?php 
                foreach($recipes as $recipe) {
                        echo $recipe['title'].' auteur : '. $recipe['author'].'<br>';
                }
            ?>
        </ul>
    </body>
</html>