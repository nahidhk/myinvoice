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
$product = $_POST['cproduct'];
$recevedDate = $_POST['rdate'];
$address = $_POST['address'];
$deleveryeddate = "";
$type = "pending";
$less ="";
$paidt ="";
$due = "";
$color = "fca605";
$stmt = $conn->prepare("INSERT INTO customers ( `name`, `phone`, `product`, `rdate`, `ddate`, `type`, `address`, `less`, `paid`, `due`, `color`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssss", $name , $phone , $product, $recevedDate ,$deleveryeddate, $type ,$address , $less , $paidt , $due , $color );
if ($stmt->execute()) {
    echo "<script>window.location.href='/'</script>";
} else {
    echo "তথ্য সংরক্ষণ করতে সমস্যা হয়েছে: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>