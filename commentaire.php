<meta charset="utf-8" />
<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=utilisateurscommentaires;charset=utf8','root','');
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $getid = htmlspecialchars($_GET['id']);
   $article = $bdd->prepare('SELECT * FROM utilisateurscommentaires WHERE id = ?');
   $article->execute(array($getid));
   $article = $article->fetch();
   if(isset($_POST['submit_commentaire'])) {
      if(isset($_POST['pseudo'],$_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])) {
         $pseudo = htmlspecialchars($_POST['pseudo']);
         $commentaire = htmlspecialchars($_POST['commentaire']);
         if(strlen($pseudo) < 25) {
            $ins = $bdd->prepare('INSERT INTO requettes (id , Nom, Email , Commentaire ) VALUES (?,?,?)');
            $ins->execute(array($Nom,$Email,$Commentaire));
            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
         } else {
            $c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";
         }
      } else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }
   }
   $commentaires = $bdd->prepare('SELECT * FROM requettes WHERE id_article = ? ORDER BY id DESC');
   $commentaires->execute(array($getid));
?>
<h2>Article:</h2>
<p><?= $article['contenu'] ?></p>
<br />
<h2>Commentaires:</h2>
<form method="POST">
   <input type="text" name="nom" placeholder="Votre nom" /><br />
   <input type="text" name="email" placeholder="Votre email" /><br />
   <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br />
   <input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
</form>
<?php if(isset($c_msg)) { echo $c_msg; } ?>
<br /><br />
<?php while($c = $commentaires->fetch()) { ?>
   <b><?= $c['pseudo'] ?>:</b> <?= $c['commentaire'] ?><br />
<?php } ?>
<?php
}
?>