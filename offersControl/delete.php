
<?php
$db = mysqli_connect('localhost', 'root', '', 'speedline_dp');
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	header('location: offerList.php');
}

?>