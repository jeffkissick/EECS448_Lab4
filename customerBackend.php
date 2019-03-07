<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- Used Bootstrap here for the table, easy and looks great! -->
<?php


$uname=$_POST["uname"];
$passW=$_POST["pass"];
$kero=$_POST["item1"];
$tama=$_POST["item2"];
$giro=$_POST["item3"];
$kuru=$_POST["item4"];
$doro=$_POST["item5"];
$ship=$_POST["shipping"];

$totalKero = 125*$kero;
$totalTama = 85*$tama;
$totalGiro = 100*$giro;
$totalKuru = 100*$kuru;
$totalDoro = 85*$doro;

$shipCost = 0;
if($ship == "Overnight")
{
    $shipCost=50;
}
else if($ship == "Three Day")
{
    $shipCost=5;
}

echo "Welcome Back " . $uname . "!<br>";

echo "Your Password: " . $passW;

echo "<br><br><table class=table>";
echo "<tr> <td></td> <td>Quantity</td> <td>Cost Per Item</td> <td>Sub Total</td> </tr>";
echo "<tr> <td>Keroro</td> <td>" . $kero . "</td> <td>$125.00</td> <td>$" . $totalKero . "</td> </tr>";
echo "<tr> <td>Tamama</td> <td>" . $tama . "</td> <td>$85.00</td> <td>$" . $totalTama . "</td> </tr>" ;
echo "<tr> <td>Giroro</td> <td>" . $giro . "</td> <td>$100.00</td> <td>$" . $totalGiro . "</td> </tr>" ;
echo "<tr> <td>Kururu</td> <td>" . $kuru . "</td> <td>$100.00</td> <td>$" . $totalKuru . "</td> </tr>" ;
echo "<tr> <td>Dororo</td> <td>" . $doro . "</td> <td>$85.00</td> <td>$" . $totalDoro . "</td> </tr>" ;
echo "<tr> <td>Shipping</td> <td>" . $ship . "</td><td></td> <td>$" . $shipCost . "</td> </tr>";
echo "<tr> <td> Total Cost </td> <td></td><td></td> <td>$" . ($totalKero+$totalTama+$totalGiro+$totalKuru+$totalDoro+$shipCost) . "</td> </tr>";

?>