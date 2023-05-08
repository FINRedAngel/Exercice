<?php
require_once '../Includes/Header.php';
$requete = $pdo->query("SELECT * FROM produit");
$produits = $requete->fetchAll(PDo::FETCH_ASSOC);

$requete = $pdo->query('SELECT * FROM slider');
$sliders = $requete->fetchall(PDO::FETCH_ASSOC);
?>
<div id="main">
    <?php if(count($slider) > 0) { ?>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">titre</th>
                    <th scope="col">text</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sliders as $slider) { ?>
                    <tr>
                        <th scope="row"><?php echo $slider['id_slider']; ?></th>
                        <td><img src="../../uploads/<?php echo $slider['image']; ?>" width= "50" height="50"></td>
                        <td><?php echo $slider['titre']; ?></td>
                        <td><?php echo $slider['text']; ?></td>
                        <td>@mdo</td>
                        <td>
                            <a href="modify.php?id_product=<?php echo $product['id_product']; ?>" class="btn btn-primary">modifier</a>
                            <a href="delete.php?id_product=<?php echo $product['id_product']; ?>" class="btn btn-danger">supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo 'il n/a rien pour l/instant';
    } ?>
</div>
<?php
require_once '../Includes/Footer.php';
?>