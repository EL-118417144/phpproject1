
<DOCTYPE html>
<html>

	
    <body> <center>
        <h1>Customer Receipt</h1>
    
   
    
<!-- //Starting the session to get the session variable from last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : " .$fullNameValue.".";
echo "<br></br>";
echo "the total value is ".$totalValue2.".";

?>

	
	</center>
</body>
	
</html>
