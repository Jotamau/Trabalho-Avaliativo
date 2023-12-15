<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];

if ($nome == "Admin" and $senha == "123") {
    header("Location: /admin/dashboard.php");
    exit;  
} elseif ($nome == "Inter" and $senha == "123") {
    header("Location: /inter/dashboard.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>
