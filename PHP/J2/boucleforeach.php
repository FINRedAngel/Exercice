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
]
];

for($i = 0; $i < 3; $i++){
	foreach($produits[$i] as $key => $value){
		echo "la clé est $key e la valeur est $value<br>";
	}
	echo "<br>";
}