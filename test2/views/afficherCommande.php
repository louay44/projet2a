<?PHP
include "../core/commandeC.php";
$commande1C=new commandeC();
$listeCommandes=$commande1C->afficherCommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Customer_Id</td>
<td>Total_Price</td>
<td>Created</td>
<td>Modified</td>
<td>Status</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['customer_id']; ?></td>
    <td><?PHP echo $row['total_price']; ?></td>
	<td><?PHP echo $row['created']; ?></td>
	<td><?PHP echo $row['modified']; ?></td>
	<td><?PHP echo $row['status']; ?></td>
	<td><form method="POST" action="supprimerCommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierCommande.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


