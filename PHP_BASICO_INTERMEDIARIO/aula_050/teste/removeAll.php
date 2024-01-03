<?php 
    session_start();
    //remove todas as variáveis da sessão
    session_unset();

    //destroi toda a sessão
    session_destroy();
?>

<?php require_once './header.php';  ?>
<?php require_once('./nav.php')?>
<hr>
<h1>Os valores de nome e sobrenome foram todos removidos</h1>
<?php require_once './footer.php'; ?>