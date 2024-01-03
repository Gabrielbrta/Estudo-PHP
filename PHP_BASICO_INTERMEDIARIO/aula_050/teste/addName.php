<?php 
    session_start();
    $_SESSION['nome'] = 'Gabriel';
?>
<?php require_once './header.php';  ?>
<?php require_once('./nav.php'); ?>
<hr>
<h1>O valor de nome foi adicionado</h1>
<?php require_once './footer.php'; ?>