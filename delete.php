<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

$servername ="localhost";
$username ="root";
$password = "";
$database = "exam";

$connection = new mysqli($servername, $username, $password, $database);


$sql = "DELETE FROM list Where id=$id";
$connection->query($sql);


}

header("location: /crud/index.php");
?>