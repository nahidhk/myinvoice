<?php
require_once('../../config.php');
if (!$conn) {
    die("poblem: " . mysqli_connect_error());
}
echo "Conn test ok";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$name = $_POST['cname'];
$phone = $_POST['cmobile'];
$address = $_POST['address'];

$stmt = $conn->prepare("INSERT INTO customersdata ( `username`, `phone`, `address`) VALUES (?,?,?)");
$stmt->bind_param("sss", $name , $phone , $address);
if ($stmt->execute()) {
    echo "<script>window.location.href='/'</script>";
} else {
    echo "তথ্য সংরক্ষণ করতে সমস্যা হয়েছে: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>