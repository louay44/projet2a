<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Commande réussie</title>
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>

<body>
<div class="container">
    <h1>Statut de la commande</h1>
    <p>Votre commande a été soumise avec succès. L' ID du commande est #<?php echo $_GET['id']; ?></p>
</div>
</body>
</html>