<?php 
require_once('../../config.php');
if (!$conn) {
    die("poblem: " . mysqli_connect_error());
}
$id = $_GET['id'];
echo $id;
$bill = $_POST['bill'];
$paid = $_POST['paid'];
$less = $_POST['less'];
$due = $_POST['due'];
$sql = "UPDATE customers SET `type`='Delivered' , color = 'd900ff' , cssd2 = 'none' , ddate=CURDATE() WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='/'</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
