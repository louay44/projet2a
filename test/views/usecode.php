<?PHP

include "../entities/code.php";
include "../core/codec.php";
$codec=new codec();
if (isset($_POST['montant']) and isset($_POST['code']))
	{	$result1=$codec->montant($_POST['code']);
foreach($result1 as $row){
		$montant=$row['montant'];}
		$result2=$codec->validite($_POST['code']);
foreach($result2 as $row){
		$validite=$row['validite'];}
if ((isset($_POST['Utiliser']))&&($montant == $_POST['montant'])&& ($validite == 0))
{$result3=$codec->dateajout($_POST['code']);
foreach($result3 as $row){
		$dateajout=$row['dateAjout'];
	}
	$code=new code(($_POST['code']),($_POST['montant']),1,$dateajout,5);
	$codec->modifiercode($code,$_POST['num_ini']);
	echo $_POST['num_ini'];
	header('Location: affichercodes.php');
	$codec->modifiersolde($_POST['montant']);
}
else{
	header('Location: utilisercode.php');
}}
else{
header('Location: utilisercode.php');

}

?>