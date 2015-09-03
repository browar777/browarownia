


<!DOCTYPE html>
<html>
      <head>
          <meta charset="UTF-8">
      </head>
      <body style="background:gray">
	  
	  <div style="width:1000px; height:100%; margin:0 auto; border:solid 1px black;">
       <h1>   Moja pierwsza strona internetowa.</h1>
	   </h1>
	   
	   <form action="" method="POST">
	   
	  X: <input type="text"  name="x"/>
	   Y: <input type="text"  name="y"/>
	   
	   <button type="submit" name="value" value="-">-</button>
	   <button type="submit" name="value" value="+">+</button>
	   <button type="submit" name="value" value="*">*</button>
	   <button type="submit" name="value" value="/">/</button>
	   
	   </form>
	   
	   <h1>Wynik :

<?PHP
echo 'hell';
	if(!empty($_POST))
	{
		switch ($_POST['value']) 
{
	case '+':
        echo $_POST['x'] + $_POST['y'];
        break;
    case '-':
        echo $_POST['x'] - $_POST['y'];
        break;
    case '*':
        echo $_POST['x'] * $_POST['y'];
        break;
	case '/':
        echo $_POST['x'] / $_POST['y'];
        break;
}
		
		
	}
/*	
					echo '</br>';
					
					$char = '+';
					
					
					$x = $_POST['x'];
					$z = $_POST['y'];
				$c = eval("return $x $char $z;");
				echo $c;
*/

?>



	   </h1>
	   
      </body>
</html>
