
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "1) Multiplication Table";
echo "<table style='border-collapse: collapse' border =\"4\" >";
  for ($i = 0; $i <= 100; $i++){
    echo "<tr>";
    for ($j = 0; $j <= 100; $j++){
    		//Prints the columns numbers
            if ($i == 0 && $j > 0){
              echo "<td>" . $j . "</td>";
            }
            //Prints the row numbers
            else if ($j == 0 && $i > 0){
              echo "<td>" . $i . "</td>";
            }
            //Prints the Actual Multiplication Table
            else if ($i > 0 && $j > 0){
              echo "<td>" . $i * $j . "</td>";
            }
            else{
              echo "<td>  </td>";
            }
    }
    echo "</tr>";
  }
 echo "</table>";
?>