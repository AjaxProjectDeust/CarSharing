<table border="1">
<?php
// $NbrLigne : le nombre de lignes
$NbrLigne = 3;
// $NbrCol : le nombre de colonnes
$NbrCol = 4;
// -------------------------------
?>
   <thead>
	<tr>
<?php
	// ENTETE pour chaque colonne
	for ($j=1; $j<=$NbrCol; $j++) 
	{ 
?>
		<th><?php echo 'colonne '. $j; ?></th>
<?php
	} // end for
?>
	</tr>
   </thead>

   <tbody>
<?php
	// pour chaque ligne
	for ($i=1; $i<=$NbrLigne; $i++) 
	{ 
?>
	<tr>
<?php
		// pour chaque colonne (de la ligne)
		for ($j=1; $j<=$NbrCol; $j++) 
		{ 
?>
		<td><?php echo 'lig '. $i .' - col '. $j; // CONTENU de la CELLULE i x j ?></td>
<?php
		} // end for
?>
	</tr>
<?php
	} // end for
?>
   </tbody>
</table>
