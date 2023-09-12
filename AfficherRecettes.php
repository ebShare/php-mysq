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
    <body style="text-align:center">
        <h1>Affichage des recettes</h1>
        <ul>
            <?php 
                foreach($recipes as $recipe) {
                    if ($recipe['is_enabled']==true){
                        echo '<h2>'.$recipe['title'].'</h2>'.' auteur : '. $recipe['author'].'<br><br>';
                    }
                }
            ?>
        </ul>
    </body>
</html>