<?php $title = 'Physique';?>
<?php require('header.php')?>

<?php ob_start(); ?>
<h1>Cours de physique</h1><br>
<form action="modele/impedance.php" method="post">
<p>
<button type="submit" value="bode">Diagramme de Bode (Premier ordre, Deuxième ordre) </button><br><br>
</p>

</form>

<form action="modele/impedance.php" method="post">
<p>
<button type="submit" value="impedance">Impédance complexe (loi d\'Ohm,loi des mailles, loi des noeuds..) </button><br><br>
</p>

</form>
<form action="modele/impedance.php" method="post">
<p>
<button type="submit" value="filtre">Filtre (Passe bas, passe haut, passe bande) </button><br><br>
</p>

</form>

<?php $contenu = ob_get_clean(); ?>
<?php 
if (isset($_GET['u'])) $action=$_GET['u']; else $action=""; 
case "":
    $contenu='<h1>Site de révision Mathématique & Physique</h1>
                  <a href="index.php?a=physique" class="physique"><h1> PHYSIQUE</h1> </a>
                  <a href="index.php?a=mathematique" class="mathematique"><h1> MATHÉMATIQUE</h1> </a>';
    break;
case "physique":
    require_once('modele/physique.php');
    break;
case "math":
    require_once('modele/math.php');
    break;
case "impedance":
    require_once('modele/impedance.php');
    break;
?>