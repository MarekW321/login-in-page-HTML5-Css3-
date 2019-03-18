<?php


?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Sign In</title>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" />
	
</head>

<body>

	<div id="container">
		
            <p> Sign In</p>
            
            <form action="zaloguj.php" metod="post" enctype="multipart/form-data" >
            
			<input type="text" placeholder="Login" onfocus="this.placeholder=''" onblur="this.placeholder='Login'" >
			
			<input type="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" >
          
         <div class="check" ><input type="checkbox"> <m>Remember me</m> </div>
         
          <div class="check" >
              <l> Forgot your passowrd? </l>
                </div> 
            
			<input type="submit" value="Sign In">
		</form>
		

	</div>
	
</body>
</html>