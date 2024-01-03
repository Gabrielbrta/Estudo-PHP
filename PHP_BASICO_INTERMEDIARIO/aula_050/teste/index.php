<?php 
    session_start();
    $nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
    $sobrenome = !empty($_SESSION['sobrenome']) ? $_SESSION['sobrenome'] : '-';
?>

<?php require_once './header.php';  ?>
<?php require_once './nav.php'; ?>
<hr>
    <h1>Nome</h1>
    <h3><?= $nome ?></h3>
    <h1>Sobrenome</h1>
    <h3><?= $sobrenome ?></h3>

<?php require_once './footer.php'; ?>