<html>
<head>
</head>
<body>
<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['id'])){
	$commandeC=new commandeC();
    $result=$commandeC->recupererCommande($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$customer_id=$row['customer_id'];
        $status=$row['status'];
?>
<form method="POST">
<table>
<caption>Modifier Commande</caption>
<tr>
<td>Id</td>
<td><input type="number" name="id" id="id" required value="<?PHP echo $id ?>"></td>
	<td><span id="missid"></span><br></td>
</tr>
<tr>
<td>Customer_Id</td>
<td><input type="numer" name="id_cus" id="id_cus" required value="<?PHP echo $customer_id ?>"></td>
	<td><span id="missid_cus"></span><br></td>
</tr>
<tr>
<td>Status</td>
<td><input type="number" name="status" id="status" required value="<?PHP echo $status ?>"></td>
	<td><span id="missstatus"></span><br></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier" id="bouton"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['id'],$_POST['customer_id'],$_POST['status']);
	$commandeC->modifierCommande($commande,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherCommande.php');
}
?>
	<script>
	var formValid = document.getElementById('bouton');
            var id = document.getElementById('id');
            var missid = document.getElementById('missid');
            var idValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (id.validity.valueMissing){
                    event.preventDefault();
                    missid.textContent = 'id manquant';
                    missid.style.color = 'red';
                //Si le format de données est incorrect
                }
            }
	var formValid = document.getElementById('bouton');
            var customer_id = document.getElementById('customer_id');
            var misscustomer_id= document.getElementById('misscustomer_id');
            var customer_idValid = /^[0-9]/;
            
            formValid.addEventListener('click', validation1);
            
            function validation1(event){
                //Si le champ est vide
                if (customer_id.validity.valueMissing){
                    event.preventDefault();
                    misscustomer_id.textContent = 'customer_id manquant';
                    misscustomer_id.style.color = 'red';
                //Si le format de données est incorrect
                }
            }
	var formValid = document.getElementById('bouton');
            var status = document.getElementById('status');
            var missstatus = document.getElementById('missstatus');
            var statusValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
            
            formValid.addEventListener('click', validation2);
            
            function validation2(event){
                //Si le champ est vide
                if (status.validity.valueMissing){
                    event.preventDefault();
                    missstatus.textContent = 'status manquant';
                    missstatus.style.color = 'red';
                //Si le format de données est incorrect
                }
            }
	
	</script>
</body>
</html>