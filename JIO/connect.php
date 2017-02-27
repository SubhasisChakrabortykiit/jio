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
		<meta http-equiv="Page-Enter" content="blendTrans(Duration=0)" />
		<meta http-equiv="Page-Exit" content="blendTrans(Duration=0)" />
	  <title>Reliance Jio Tower</title>
		<link href="css/pagecontrol.css" rel="stylesheet" type="text/css" />
		<link href="css/Gridstyle.css" rel="stylesheet" type="text/css" />
		<link href="css/tables.css" rel="stylesheet" type="text/css"/>
		<link href="css/StyleTable.css" rel="stylesheet" type="text/css" />
		<script src="js/jssor.slider-22.2.0.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                  size = screen.width - 30;
                    refSize = Math.min(refSize, size);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
		<script type="text/javascript">
		 function popup(mylink, windowname)
		  {
				 if (! window.focus)
				 return true;
				 var href;
				 if (typeof(mylink) == 'string')
				  href=mylink;
				 else
				  href=mylink.href;
				 window.open(href, windowname, 'width=400,height=200,scrollbars=yes');
				 return false;
			 }
	 </script>
	  <style type="text/css">
		#mytable {
			 border-color: #AA8822;
			 background-image:url('image/pattern.jpg');
			 border-width: 5px;
			 cellpadding:0;
			 cellspacing:10;
			 width:60%;
			 height: 500px;
		}
	                h1 {
	          						text-shadow: 0 1px 0 #ccc,
	                       0 2px 0 #c9c9c9,
	                       0 3px 0 #bbb,
	                       0 4px 0 #b9b9b9,
	                       0 5px 0 #aaa,
	                       0 6px 1px rgba(0,0,0,.1),
	                       0 0 5px rgba(0,0,0,.1),
	                       0 1px 3px rgba(0,0,0,.3),
	                       0 3px 5px rgba(0,0,0,.2),
	                       0 5px 10px rgba(0,0,0,.25),
	                       0 10px 10px rgba(0,0,0,.2),
	                       0 10px 20px rgba(0,0,0,.15);
	        		 				}
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 10px;
            height: 10px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 10px;
            height: 10px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>
</head>
<body style="margin:0px; padding:0px; font-family:Verdana; width: 100%; font-size:small; background: url(image/bg.jpg); background-repeat: no-repeat; background-attachment: fixed; text='Black'">

  <table width="100%">
  <tr>
  		<td align="left">
  				<a href="index.html"><img id="Image1" width=300px; src="image/reliancejio.png" style="border-width:0px;" /></a>
  		</td>
  		<td align="right">
  				<table id = "navi" width="100%" cellspacing="10">
  						<tr style="color:03065B">
  								<td align="right" style="height: 30px; padding-right: 20px; font-weight: bold;">
  										<a href="index.html">Home</a>&nbsp;|&nbsp;<a href="package.html">Our Packages</a>&nbsp;|&nbsp;<a href="postenquiry.html">Send Enquiry</a>&nbsp;|&nbsp;<a href="status.html">Check Status</a>&nbsp;|&nbsp;<a href="contact.html">Contact Us</a></td>
  						</tr>
  						<tr>
  								<td align="right" style="font-weight: bold"></td>
  						</tr>
  						<tr>
  								<td align="right" style="padding-right: 20px; color: #fff; font-weight:900">
  										Email : info@reliancejiotower.com</td>
  						</tr>
  						<tr>
  								<td align="right" style="padding-right: 20px; color: #fff; font-weight:900">
  										Tel: 022 - 39528355</td>
  						</tr>
  				</table>
  		</td>
  </tr>
  </table>
  </center>

<?php

$mob = $_POST['mobi'];
$query = "SELECT * FROM customer where mob ='$mob'"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

$row = mysqli_fetch_array($result);
if ($row == NULL)
{
	echo "<br><br><br><br><br><br><br><br><br><br><br><center><b><h1>No entry for this number</h1></b></center>";
}
else
{

echo "<center><table id='mytable'>"; // start a table tag in the HTML

        echo "<tr>";
                    echo "<td align='left' colspan='4' style='padding: 5px; background: #3173CF'><span style='color:White;font-size:Medium;font-weight:bold;'>" . $row['name'] . "</span></td>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>Mobile No</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['mob'] . "</td>";
                    echo "<td align='left'>Email </td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['mail'] . "</td>";
        echo "</tr>";  //$row['index'] the index here is a field name
        // SITE INFORMATION
        echo "<tr>";
                    echo "<th align='left' colspan='4' style='background: #004450; font-size: medium; font-weight: bold; color: #ffffff; padding: 2px'>Site Information</th>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>Pincode</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['pin'] . "</td>";
                    echo "<td align='left'>Site name</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['site'] . "</td>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>Address</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['address'] . "</td>";
                    echo "<td align='left'>Police Station</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['ps'] . "</td>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>Taluk</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['taluk'] . "</td>";
                    echo "<td align='left'>District</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['district'] . "</td>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>State</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['state'] . "</td>";
                    echo "<td align='left'>Thana</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['thana'] . "</td>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>Khata</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['khata'] . "</td>";
                    echo "<td align='left'>Plot</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['plot'] . "</td>";
        echo "</tr>";
        //SITE INFO ENDS here

        //PERSONAL INFORMATION

        echo "<tr>";
                    echo "<th align='left' colspan='4' style='background: #004450; font-size: medium; font-weight: bold; color: #ffffff; padding: 2px'>Personal Information</th>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>Pincode</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['ppin'] . "</td>";
                    echo "<td align='left'>District</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['pdistrict'] . "</td>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>State</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['pstate'] . "</td>";
                    echo "<td align='left'>Address</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['paddress'] . "</td>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>Thana</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['pthana'] . "</td>";
                    echo "<td align='left'>Khata</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['pkhata'] . "</td>";
        echo "</tr>";
        echo "<tr>";
                    echo "<td align='left' style='padding-left: 10px'>Plot</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['pplot'] . "</td>";
                    echo "<td align='left'>Police Station</td>";
                    echo "<td align='left' style='color:#485874;'>" . $row['pps'] . "</td>";
        echo "</tr>";
				echo "<tr>";
										echo "<td align='left' colspan='4' style='border-top: 2px solid #004450'>&nbsp;</td>";
				echo "</tr>";
				echo "<tr>";
										echo "<td align='right' style='padding-right: 10px; height: 45px'>
													<form name='submit' method='POST' action='invoice.php' id='submit'>
													<a href='invoice.php' onClick='return popup(this, 'invoice')'>
													<input type='hidden' name='mob' value='" . $mob . "'/>
													<input type='submit' value='Invoice' class='buttonwhitecss' style='height:30px;width:120px;' />
													</a></form>
													</td>
													<td align='center' colspan='2' style='padding-right: 10px; height: 45px'>
													<a href='approval.php' onClick='return popup(this, 'approval')'>
													<input type='hidden' name='mob' value='" . $mob . "'/>
													<input type='submit' value='Approval Letter' id='cmdApproval' class='buttonwhitecss' style='height:30px;width:140px;' />
													</a>
													</td>
													<td align='left' style='padding-right: 10px; height: 45px'>
													<a href='agreement.php' onClick='return popup(this, 'agreement')'>
													<input type='hidden' name='mob' value='" . $mob . "'/>
													<input type='submit' name='cmdAgreement' value='Agreement Copy' id='cmdAgreement' class='buttonwhitecss' style='height:30px;width:150px;' />
													</a> </td>";
				echo "</tr>";

echo "</table>"; //Close the table in HTML
echo "<div>";

mysqli_close($connection); //Make sure to close out the database connection

}
?>
</body>
<!-- 		Copyright &copy 2017 -->
<!--		SUBHASIS CHAKRABORTY -->
<!--		AKASH NARAYAN 			-->
<!--		MAYANK AGARWAL			-->
