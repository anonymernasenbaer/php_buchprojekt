<?php
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];

$sql="delete from 'buchtabelle' where id=$id";
$result=mysqli_query($con, $sql);
if($result)
echo "Erfolgreich gelöscht.";
}
?>