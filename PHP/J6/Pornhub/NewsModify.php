<?php
require "includes/Header.php";
require_once(__DIR__."/Script/pdo.php");

if(!empty($_POST)){
    $news = $pdo->prepare("UPDATE News SET news_sujet = ?, news_text = ? WHERE id_news = ?")->execute([$_POST['sujet'], $_POST['text'], $_GET['id_news']]);
    header('Location: News.php');
}

$requete = $pdo->prepare("SELECT * FROM news WHERE id_news = ?");
$requete->execute([$_GET['id_news']]);
$news = $requete->fetch(PDO::FETCH_ASSOC);
$news1 = $news['news_sujet'];
$news2 = $news['news_text'];

$news = $pdo->prepare("SELECT * FROM news WHERE id_news = ?")->execute([$_GET["id_news"]]);
?>
<div class="contenu">
    <form action="<?php echo $_SERVER['PHP_SELF'].'?id_news='.$_GET['id_news']; ?>" method="post">
        <fieldset>
            <ul class="col list-unstyled p-3 w-25">
                <li class="p-3"><legend>Modifier News</legend></li>
                <li class="p-3">
                    <label for="sujet">Sujet</label>
                    <input type="text" name="sujet" id="sujet" value="<?php echo $news1; ?>" required>
                </li>
                <li class="p-3">
                    <label for="text">Texte</label>
                    <textarea id="story" name="text" rows="10" cols="100" required><?php echo $news2; ?></textarea>
                </li>
                <li class="BT-submit p-3">
                    <input type="submit" value="valider"> <input type="button" value="Retour au news" onclick="history.back()">
                </li>
            </ul>
        </fieldset>
    </form>
</div>
<?php require "includes/Footer.php"; ?>