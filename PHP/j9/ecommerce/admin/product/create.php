<?php
require_once '../Includes/Header.php';
$requete = $pdo->query("SELECT * FROM category");
$categories = $requete->fetchAll(PDo::FETCH_ASSOC);

if(!empty($_POST)){
    $errors = [];

    if(empty($_POST['nom'])){
        $errors[] = "le champ nom de la catégorie ne doit pas être vide";
    }
    else if(strlen($_POST['nom']) < 1){
        $errors[] = "la longueur du nom doit dépasser 1 caractère";
    }
    else if(!is_string($_POST['nom'])){
        $errors[] = "le nom de la catégorie doit etre alphanumérique";
    }

    if(empty($_POST['description'])){
        $errors[] = "le champ nom de la catégorie ne doit pas être vide";
    }

    if(empty($_POST['description'])){
        $errors[] = "le champ nom de la catégorie ne doit pas être vide";
    }

    if(count($errors) < 1){
        require_once $_SERVER['DOCUMENT_ROOT'].'/ecommerce/admin/config/pdo.php';
        $pdo->prepare('INSERT INTO category (id_category, nom) VALUES (null, ?)')->execute([$_POST["nom"]]);
        echo '<p class="btn-success text-center"> la catégorie a bien été ajouter! </p><br>';
        header('Location: create.php'); 
    }
    else{
        foreach($errors as $error){
            echo '<p class="btn-danger text-center">'.$error.'</p><br>';
        }
    }
}
?>
<div id="main">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipat/form-data">
        <fieldset>
            <legend>ajouter une catégorie</legend>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">

            <label for="description">Description</label>
            <input type="text" name="description" id="description">

            <label for="fichier">Image</label>
            <input type="file" name="fichier" id="fichier">

            <label for="category">Categories</label>
            <select name="category" id="category">
            <?php foreach($categories as $categorie){?>    
                <option value="<?php echo $categorie['id_category']; ?>"><?php echo $categorie['nom']; ?></option>               
            <?php } ?>
            </select>
            <input type="submit" value="valider">
        </fieldset>
    </form>
    <a class="btn btn-secondary" href="index.php">Retour</a>
</div>
<?php
require_once '../Includes/Footer.php';
?>