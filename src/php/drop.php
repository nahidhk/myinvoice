<?php 
require_once('../../config.php');
if (!$conn) {
    die("poblem: " . mysqli_connect_error());
}
$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM customers name WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/'</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
