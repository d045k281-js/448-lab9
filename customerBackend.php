<style> <?php include 'style.css'; ?> </style>
<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

$username = $_POST["username"];
    $password = $_POST["password"];
    $Phone1 = $_POST["Phone"];
    $Phone2 = $_POST["Phone2"];
    $Phone3 = $_POST["Phone3"];
$Phone4 = $_POST["Phone4"];
    $shipping = $_POST["choice"];

echo "<p style='color: Blue; font-size:30px'> Welcome to the Store: " . $username ."</p>";
    echo "<p style='color: Blue; font-size:30px'> Your Password: " . $password . "</p>";
//Shipping Cost
$shippingfees=0;
if($shipping=="Normal")
{
$shippingfees=0;
}
else if($shipping=="Express")
{
$shippingfees=50;
}
else if($shipping=="Priority")
{
$shippingfees=5;
}
//Phones Cost
$Phone1price=$Phone1*359.59;
$Phone2price=$Phone2*269.49;
$Phone3price=$Phone3*300;
$Phone4price=$Phone4*259.59;
//Total
$total=$shippingfees+$Phone1price+$Phone2price+$Phone3price+$Phone4price;
echo "<p style='color: Red; font-size:30px'>Receipt:</p>";

echo "<br><br>";

echo "
 <table>
	<tr>	
		<th style='background-color:rgb(191, 209, 186)'>            </th>
		<th style='background-color:rgb(191, 209, 186)'>Quantity</th>
		<th style='background-color:rgb(191, 209, 186)'>Cost Per Item</th>
		<th style='background-color:rgb(191, 209, 186)'>Sub Total</th>
	</tr>";

	echo "<tr>
		<th style='background-color:rgb(191, 209, 186)'>Ulefone Armor 4</th>
		<td style='background-color:rgb(199, 140, 211)'>$Phone1</td>
		<td style='background-color:rgb(199, 140, 211)'>$359.59</td>
		<td style='background-color:rgb(199, 140, 211)'>$$Phone1price</td>
	</tr>";
	echo "<tr>
		<th style='background-color:rgb(191, 209, 186)'>Blackview BV9700 PRO Rugged</th>
		<td style='background-color:rgb(199, 140, 211)'>$Phone2</td>
		<td style='background-color:rgb(199, 140, 211)'>$269.49</td>
		<td style='background-color:rgb(199, 140, 211)'>$$Phone2price</td>
	</tr>";
echo "<tr>
		<th style='background-color:rgb(191, 209, 186)'>Dodge S60</th>
		<td style='background-color:rgb(199, 140, 211)'>$Phone3</td>
		<td style='background-color:rgb(199, 140, 211)'>$300</td>
		<td style='background-color:rgb(199, 140, 211)'>$$Phone3price</td>
	</tr>";
echo "<tr>
		<th style='background-color:rgb(191, 209, 186)'>Kyocera DuaForce Pro</th>
		<td style='background-color:rgb(199, 140, 211)'>$Phone4</td>
		<td style='background-color:rgb(199, 140, 211)'>$259.59</td>
		<td style='background-color:rgb(199, 140, 211)'>$$Phone4price</td>
	</tr>";
echo "<tr>
		
		<th style='background-color:rgb(191, 209, 186)'>Shipping</th>
		<td style='background-color:rgb(199, 140, 211)' colspan='2'>$shipping</td>
		<td style='background-color:rgb(199, 140, 211)'>$$shippingfees</td>

</tr>";
echo "<tr>
		
		<th style='background-color:rgb(191, 209, 186)' colspan='3'>Total Cost</th>
		<td style='background-color:rgb(199, 140, 211)'>$$total</td>

</tr>";




echo "</table>";
?>