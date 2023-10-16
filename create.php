
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Formulaire de Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

<?php
// Validation du formulaire
if (isset($_POST['title']) &&  isset($_POST[''])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            //$loggedUser = ['email' => $user['email'],];
            // Enregistrement de l'email de l'utilisateur en session
            $_SESSION['LOGGED_USER'] = $user['email'];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}
?>

<?php include_once('header.php'); ?>
<h1>Ajouter une recette</h1>
<form action="post_create.php" method="POST"›
    <div class="mb-3">
        <label for="title" class="form-label">Titre de la recette</label>
        <input type="title" class="form-control" id="title" name="title" aria-describedby= "title">
        <div id="title-help" class="form-text">Choisissez un titre percutant !</div>
    </div> 
    <div class="mb-3"> 
        <label for="recipe" id="recipe" class="form-label" Description de la recette></label>
        <textarea id="recipe" name="recipe" class="form-control" placeholder="Seulement du contenu vous appartenant"></textarea>
    </div> 
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form> 
<br />
</div>
<?php include_once('./footer.php');?>