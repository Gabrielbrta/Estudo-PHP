<?php 
    session_start();
    $_SESSION['sobrenome']  = 'Correa';
?>

<?php require_once './header.php';  ?>
<?php require_once('./nav.php')?>
<hr>
<h1>O valor de sobrenome foi adicionado</h1>
<?php require_once './footer.php'; ?>