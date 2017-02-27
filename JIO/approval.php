<!-- 		Copyright &copy 2017 -->
<!--		SUBHASIS CHAKRABORTY -->
<!--		AKASH NARAYAN 			-->
<!--		MAYANK AGARWAL			-->
<?php
$host="localhost";
$user="root";
$password="";
$dbname="reliancejio";
$connection = mysqli_connect($host,$user,$password,$dbname); //The Blank string is the password
/*if($connection) {
  echo '<h1>Connected to MySQL</h1>';
} else {
   echo '<h1>MySQL Server is not connected</h1>';
}
*/
mysqli_select_db($connection,'reliancejio');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<link rel="icon" type="image/png" href="image/jio.png"/>
    <title>Reliance Jio Tower</title>
    <style>
    #toptable {
      border: 5px solid black;
      border-color: #7B241C;
      margin-top: 200px;
      background: #EAECEE;
    }
    div {
       border: 2px;
       border-style: solid;
        border-color:#7B241C;
    }
    </style>
</head>
<body style="margin:0px; padding:0px; font-family:Verdana; width: 100%; font-size:small; background: url(image/bg.jpg); background-repeat: no-repeat; background-attachment: fixed; text='Black'">
<center>
<?php
//$mob = $_POST['mob'];
//$query = "SELECT * FROM customer where mob ='$mob'";
//$result = mysqli_query($connection,$query);
//$row = mysqli_fetch_array($result);
echo "<center>";
echo "<table id='toptable' width=60%>";
    echo "<tr>";
      echo "<td colspan='2'>";
            echo "<a href='index.html'><img align='left' id='Image1' width=200px; src='image/reliancejio.png' style='border-width:0px;' /></a>";
          echo "<p align='right'>  <span float='right' style='color: #2C3E50; font-weight: 600'>Approval Letter</span></p>";
      echo "</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td colspan='2'>";
          echo "<p style='padding-top=10px'>I am pleased to approve your request for Rs20,000.00 for the new copiers. I agree with you. If we want to maintain a professional image, we cannot continue to ask our investors to share copies of handouts during quarterly meetings because our copy machines are down. Good call.
          Please send the bills and receipts to accounting after you have made your selection. <br><br> <br> <i>This is for reference purpose only.</i></p>";
      echo "</td>";
    echo "</tr>";
    echo "<table>";
      echo "<br><br>";
     echo "<button onclick='window.print()'>Print</button>";
     echo "</center>";
     echo "</body>";
     echo "</html>";
 mysqli_close($connection);
?>
<!-- 		Copyright &copy 2017 -->
<!--		SUBHASIS CHAKRABORTY -->
<!--		AKASH NARAYAN 			-->
<!--		MAYANK AGARWAL			-->
