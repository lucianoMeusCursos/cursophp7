<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", '123'); 

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));

// $conn->rollBack();
$conn->commit();
echo 'Dados deletados com sucesso';


?>
