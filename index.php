<html>  
<body align='center'> 
<h1>Table</h1> 
<form method="post">  
	Enter the Number:  
	<input type="number" name="number"/><br/><br/> 
	<input type="submit" value="Get Table"/>  
</form>  
</body>  
</html>  
 
<?php    
 if($_POST)  
 {    
  $number = $_POST['number'];  
for($i=1; $i<=10; $i++)   
{   
  echo "$number X $i = ".$i*$number;   
  echo '<br>';     
} 
} 
?>
