<?php



if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];

include('connection.php');

$connection = new connection();

$connection-> selectDatabase('crudpoo6');

include('client.php');

client::deleteClient('clients',$connection->conn,$id);


}
?>
