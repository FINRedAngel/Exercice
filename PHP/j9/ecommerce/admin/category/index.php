<?php
require_once '../Includes/Header.php';
$requete = $pdo->query("SELECT * FROM category");
$categories = $requete->fetchAll(PDo::FETCH_ASSOC);
?>
    <div id="main">
        <?php if(count($categories) > 0){ ?>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $category){ ?>
                        <tr>
                            <th scope="row"><?php echo $category['id_category']; ?></th>
                            <td><?php echo $category['nom']; ?></td>
                            <td>
                                <a class="btn btn-warning" href="modify.php?id_category=<?php echo $category['id_category']; ?>">modifier</a>
                                <a class="btn btn-danger" href="delete.php?id_category=<?php echo $category['id_category']; ?>">supprimer</a>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
            <p><a class="btn btn-primary" href="create.php">Ajouter</a></p>
        <?php }else{
                echo "<h2>Il n'y a pas de Catégory!</h2>s";
            };
        ?>
    </div>
<?php
require_once '../Includes/Footer.php';
?>