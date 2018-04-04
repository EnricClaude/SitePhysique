<?php $title = 'Physique';?>
<?php require('header.php')?>

<?php ob_start(); ?>
<h1>Cours de physique</h1><br>
<button type="button" value="bode" onclick="bode()">Diagramme de Bode (Premier ordre, Deuxième ordre) </button><br><br>
<button type="button" value="impedance">Impédance complexe (loi d\'Ohm,loi des mailles, loi des noeuds..) </button><br><br>
<button type="button" value="filtre">Filtre (Passe bas, passe haut, passe bande) </button><br><br>

<?php $contenu = ob_get_clean(); ?>



