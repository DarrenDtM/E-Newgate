<?php
include('../controleur/connexion.php');
mysql_connect($serveur, $login, $passwd);
mysql_select_db("utilisateur");
// On récupère les 14 dernièrs produits
$retour = mysql_query('SELECT * FROM produit ORDER BY id DESC LIMIT 0, 14');
while ($donnees = mysql_fetch_array($retour))
{
?>
 
//Affichage du premier produit
 
<div style="position: absolute; height: 400px; width:20px; left: -12px; top: 12px;">
<div id="TSAccordion1" name="TSAccordion1" style=""><div
class="triotitle"><a href="#"><span style="top">
<?php echo $donnees['nom_pro']; ?></span></a></div>
  <div style="overflow:
hidden; height: 190px;" class="triocontent">
    <div id="img2" style="width: 15%; float: left;"><img
src="../produitsenligne1_fichiers/logitix.png" alt="logitix" width="123" /></div>
    <div id="allcontent2" style="width: 45%; float: left; font-family: Georgia, 'Times New Roman', Times, serif;">
      <div id="calling">
<?php echo $donnees['desc_pro']; ?>
</div>
      <div id="content2"><?php
    // On enlève les éventuels antislash PUIS on crée les entrées en HTML (<br />)
    $caract_pro = nl2br(stripslashes($donnees['caract_pro']));
    echo $caract_pro;
    ?>
      </div>
       
 <div id="readmore2">
   <a
href="../prodlogitix.html"
 target="blank"> D&eacute;tails &gt;&gt; </a>     </div>
    </div></div>
 
//Affichage du deuxieme produit
 
  <div class="triotitle"><a href="#"><?php echo $donnees['nom_pro']; ?>
</a></div><div
style="overflow: hidden; height: 0pt;" class="triocontent">
   <div id="img" style="width: 15%; float: left;"><img
src="../produitsenligne1_fichiers/logipeck.png" alt="logipeck" width="124" height="124" />  </img></div>
     <div id="allcontent" style="width: 45%; float: left; font-family: Georgia, 'Times New Roman', Times, serif;">
     <div id="calling"><?php echo $donnees['desc_pro']; ?>
</div>
     <div id="content"><?php
    // On enlève les éventuels antislash PUIS on crée les entrées en HTML (<br />)
    $caract_pro = nl2br(stripslashes($donnees['caract_pro']));
    echo $caract_pro;
    ?>
     </div>
        
       <div id="readmore">
     <a
href="../prodlogipeck.html"
 target="_blank"> D&eacute;tails &gt;&gt; </a>       </div>
                                                                     
    </div>
<?php
} // Fin de la boucle des produits
?>