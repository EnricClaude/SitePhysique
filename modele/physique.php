<?php $title = 'Physique';?>
<?php require('header.php')?>

<?php ob_start(); ?>
<h1>Cours de physique</h1><br>

<?php  $bode='bode'; ?>
<form method="post">
<input type="submit" method="post" name="<?php echo $bode; ?>" value="Diagramme de Bode (Premier ordre, Deuxième ordre) " id="submit"/>
</form>



<form method="post">
<p>
<button type="submit" value="impedance">Impédance complexe (loi d\'Ohm,loi des mailles, loi des noeuds..) </button><br><br>
</p>

</form>
<form method="post">
<p>
<button type="submit" value="filtre">Filtre (Passe bas, passe haut, passe bande) </button><br><br>
</p>

</form>

<?php $contenu = ob_get_clean(); ?>
<?php
if(isset($_POST[$bode]))
{
    $contenu=$bode;
}
?>