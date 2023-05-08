<?php
require_once '../Includes/Header.php';
$requete = $pdo->query("SELECT * FROM produit");
$produits = $requete->fetchAll(PDo::FETCH_ASSOC);
?>
    <div id="main">
        <?php if(count($produits) > 0){ ?>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produits as $produit){ ?>
                        <tr>
                            <th scope="row"><?php echo $produit['id_produit']; ?></th>
                            <td><?php echo $produit['nom']; ?></td>
                            <td><?php echo $produit['description']; ?></td>
                            <td><img src="<?php echo $produit['image']; ?>" width="50" height="50" alt=""></td>
                            <td>
                                <a class="btn btn-warning" href="modify.php?id_produit=<?php echo $produit['id_produit']; ?>">modifier</a>
                                <a class="btn btn-danger" href="delete.php?id_produit=<?php echo $produit['id_produit']; ?>">supprimer</a>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
            <p><a class="btn btn-primary" href="create.php">Ajouter</a></p>
        <?php }else{
                echo "<h2>Il n'y a pas de Produit!</h2>s";
            };
        ?>
    </div>
<?php
require_once '../Includes/Footer.php';
?>