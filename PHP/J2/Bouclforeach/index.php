<?php
$produits = [
[
	"nom" => "Samsung Galaxy",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 52.57,
	"categorie" => "telephone",
	"image" => "images/img1.jpg"
],
[
	"nom" => "Samsung Galaxy A25",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 1052.99,
	"categorie" => "Fake telephone",
	"image" => "images/img2.jpg"
],
[
	"nom" => "Blackbery Keyone",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 149.99,
	"categorie" => "Real telephone",
	"image" => "images/img3.jpg"
],
[
	"nom" => "Samsung Galaxy",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 52.57,
	"categorie" => "telephone",
	"image" => "images/img1.jpg"
],
[
	"nom" => "Samsung Galaxy A25",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 1052.99,
	"categorie" => "Fake telephone",
	"image" => "images/img2.jpg"
],
[
	"nom" => "Blackbery Keyone",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 149.99,
	"categorie" => "Real telephone",
	"image" => "images/img3.jpg"
],
[
	"nom" => "Samsung Galaxy",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 52.57,
	"categorie" => "telephone",
	"image" => "images/img1.jpg"
],
[
	"nom" => "Samsung Galaxy A25",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 1052.99,
	"categorie" => "Fake telephone",
	"image" => "images/img2.jpg"
],
[
	"nom" => "Blackbery Keyone",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 149.99,
	"categorie" => "Real telephone",
	"image" => "images/img3.jpg"
],
[
	"nom" => "Samsung Galaxy",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 52.57,
	"categorie" => "telephone",
	"image" => "images/img1.jpg"
],
[
	"nom" => "Samsung Galaxy A25",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 1052.99,
	"categorie" => "Fake telephone",
	"image" => "images/img2.jpg"
],
[
	"nom" => "Blackbery Keyone",
	"Description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error nemo maxime ex est distinctio pariatur blanditiis quam temporibus accusantium obcaecati?",
	"prix" => 149.99,
	"categorie" => "Real telephone",
	"image" => "images/img3.jpg"
]
];
?>

<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<div class="container">
    <div class="row">
        <?php foreach($produits as $produit) { ?>

        <div class="card col-lg-3 col-md-6 col-sd-12" style="width: 18rem;">
            <img src="<?php echo $produit['image']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $produit['nom'];?></h5>
                <p class="card-text"><?php echo $produit['Description'];?></p>
                <p class="card-text"><?php echo $produit['categorie'];?></p>
                <a href="#" class="btn btn-primary">Acheter pour <?php echo $produit['prix'];?> €</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

</body>

</html>
