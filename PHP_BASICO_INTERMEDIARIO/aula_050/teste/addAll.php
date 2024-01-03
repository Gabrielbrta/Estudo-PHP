<?php 
    session_start();
    $_SESSION['nome'] = 'Gabriel';
    $_SESSION['sobrenome'] = 'Correa';
?>

<?php require_once './header.php';  ?>
<?php require_once('./nav.php')?>
<hr>
<h1>Os valores de nome e sobrenome foram preenchidos</h1>
<?php require_once './footer.php'; ?>