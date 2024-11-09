<?php 
require_once('../config.php');
if ( isset( $_GET[ 'id' ] ) ) {
    $id = $_GET[ 'id' ];
} 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customers WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); 
} else {
    echo "error";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/src/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nahid HK Service Center</title>
</head>
<body>
<div class="nav">
    <blockquote>
        <h1>
            <i class="fa-solid fa-flask"></i>  Nahid HK Labs
        </h1>
    </blockquote>
    <div class="btnbox">
        <form id="serachdata">
            <label for="">Search</label>
            <input type="search" name="" id="" placeholder="Search The ID">
            <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <button class="btn" onclick="window.history.back()">Go Back</button>
    </div>
</div>

<br><br>
<section class="apt">
    <form action="/src/php/cost.php/?id=<?php echo $id ?>" method="post">
        <h2>Save Billing Entry</h2>
        <label for="">Total Amount</label>
        <input value="<?php echo $row['bill']?>" type="number" name="bill">
        <label for="">Paid</label>
        <input value="<?php echo $row['paid']?>" type="number" name="paid">
        <label for="">Less</label>
        <input value="<?php echo $row['less']?>" type="number" name="less">
        <label for="">Due</label>
        <input value="<?php echo $row['due']?>" type="number" name="due">
        <center>
        <button class="btn">save</button>
    </center>
    </form>
</section>
    <!--javascript  -->
    <script src="src/js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>