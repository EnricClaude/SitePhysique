<?php $title = 'Physique';?>
<?php require('header.php')?>

<?php ob_start(); ?>
<h1>Cours de physique</h1><br>

<?php  
$bode='<h1>bode</h1>'; 
$filtre='<h1>Filtre</h1>';
$impedance='<h1>Impédance</h1>';
?>


<form method="post">
<input type="submit" method="post" name="<?php echo $bode; ?>" value="Diagramme de Bode (Premier ordre, Deuxième ordre) " id="submit"/>
</form>



<form method="post">
<p>
<input type="submit" method="post" name="<?php echo $impedance; ?>" value="Impédance complexe (loi d\'Ohm,loi des mailles, loi des noeuds..)"> </input>
</p>

</form>
<form method="post">
<p>
<input type="submit" method="post" name="<?php echo $filtre;?>" value="Filtre (Passe bas, passe haut, passe bande) "></input>
</p>

</form>

<?php $contenu = ob_get_clean(); ?>
<?php
if(isset($_POST[$bode]))
{
    $contenu=$bode;
}
if(isset($_POST[$filtre]))
{
    $contenu=$filtre;
}
if(isset($_POST[$impedance]))
{
    $contenu=$impedance;
}
?>