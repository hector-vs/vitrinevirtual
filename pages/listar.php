<?php
include('conexao.php');

$sql = $mysqli->prepare("SELECT * FROM obras");
$sql->execute();

$fetchObras = $sql->fetchAll();


function ListarObra($id){
    $sql = 'SELECT * FROM obras'; 
    if($cd>0){
        $sql.=' WHERE id='.$id;
    }
    $res = $GLOBALS['conn']->query($sql);
    return $res;
}