<?php 
    session_start();
    unset($_SESSION['nome']);
?>

<?php require_once './header.php';  ?>
<?php require_once('./nav.php'); ?>
<hr>
<h1>O valor de nome foi removido</h1>
<?php require_once './footer.php'; ?>