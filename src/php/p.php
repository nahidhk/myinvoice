<?php 
require_once('../../config.php');
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
    <link rel="stylesheet" href="/src/css/style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print</title>
    <style>
      .main {
        width: 100%;
        display: flex;
        justify-content: center;
      }

      .point {
        width: 80%;
      }

      .holder {
        display: flex;
        justify-content: space-around;
      }

      o {
        border-bottom: 0.5px dashed #000;
      }

      .b2 {
        text-align: right;
      }

      .tab {
        border: 0.5px solid #000;
        border-collapse: collapse;
      }

      .row {
        border-left: 0.5px solid #000;
        display: flex;
        justify-content: space-around;
      }

      .td {
        padding: 8px;
        width: 100%;
        border-left: 0.5px solid #000;
        text-align: center;
      }

      .this {
        background-color: #bfbfbf;
        border: 0.5px solid #000;
      }

      .border {
        width: 200px;
        height: auto;
        padding: 8px;
        font-size: 20pt;
        border: 1px solid #000;
        margin: 7px;
      }

      .bord {
        border-top: 1px solid #000;
        padding-left: 40px;
        padding-right: 40px;
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
  </head>

  <body title="Ctrl+P => Print">
    <br /><br />
    <center>
      <h1><i class="fa-solid fa-flask"></i> Nahid HK Labs</h1>
      <small
        >Email:
        <a href="mailto:nahidhk2007@gmail.com">nahidhk2007@gmail.com</a>, Phone:
        <a href="tle:+880 1763279587">+880 1763 2795 87</a>,
        <a href="tle:+880 1877357091">+880 1877 3570 91</a></small
      >
    </center>
    <hr />
    <div style="display: flex; justify-content: center">
      <div class="border">
        <b>Invoice/Cash Memo</b>
      </div>
      <svg id="barcode"></svg>
    </div>
    <hr />
    <div class="main">
      <div class="point">
        <div class="holder">
          <div class="b1">
            <p>
              Invoice No:
              <o><b> <?php echo $row['id'] ?></b></o>
            </p>
            <p>Name: <o><?php echo $row['name'] ?></o></p>
            <p>Address: <o><?php echo $row['address'] ?></o></p>
            <p>Phone: <o><?php echo $row['phone'] ?></o></p>
            <p>
              Work: <o style="background-color: #<?php echo $row['color'] ?>; color: #fff"><?php echo $row['type'] ?></o>
            </p>
          </div>
          <div class="b2">
            <p>
              Inv & Date:
              <o><?php echo date("Y-m-d"); ?></o>
            </p>
            <p>
              Receved Date:
              <o><?php echo $row['rdate'] ?></o>
            </p>
            <p>
              Conforim Date:
              <o><?php echo $row['cdate'] ?></o>
            </p>
            <p>
              Delivered Date:
              <o><?php echo $row['ddate'] ?></o>
            </p>
          </div>
        </div>
        <div class="tab">
          <div class="row this">
            <div class="td">QR Code</div>
            <div class="td">Name Of Product</div>
            <div class="td">Amount</div>
          </div>
          <div class="row">
            <div class="td">
              <center>
                <div id="qrcode"></div>
              </center>
            </div>
            <div class="td">
              <h3><?php echo $row['product'] ?></h3>
            </div>
            <div class="td">
              <div class="tab">
                <div class="row this">
                  <div class="td">Net bill</div>
                  <div class="td">Paid Amount</div>
                  <div class="td">Less</div>
                  <div class="td">Due</div>
                </div>
                <div class="row">
                  <div class="td"><?php echo $row['bill'] ?></div>
                  <div class="td"><?php echo $row['paid'] ?></div>
                  <div class="td"><?php echo $row['less'] ?></div>
                  <div class="td"><?php echo $row['due'] ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br /><br /><br /><br /><br /><br /><br /><br /><br />
        <div class="loder">
          <div class="b2">
            <span>
              <b class="bord"> Checked by </b>
            </span>
          </div>
        </div>
      </div>
    </div>
    <br /><br /><br /><br />
    <small>
      <script>
        document.write(window.location.host + "/invoice/?id=<?php echo $row['id'] ?>");
      </script>
    </small>
    <script>
      new QRCode(document.getElementById("qrcode"), {
        text: window.location.host + "/invoice/?id=<?php echo $row['id'] ?>",
        width: 90,
        height: 90,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H,
      });
    </script>
    <script>
      JsBarcode("#barcode", "<?php echo $row['id'] ?>", {
        format: "CODE39",
        lineColor: "#000",
        width: 2,
        height: 40,
        displayValue: false,
      });
    </script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
      integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </body>
</html>
