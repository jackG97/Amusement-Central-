<!DOCTYPE html!>
<?php?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head>
    
    
<link rel="stylesheet" type="text/css" href="Project_CSS.css">

<title>Amusement Central app page</title>
</head>

<body>

 <div id= "menubar">       
    <ul>
    <li><a href=Information.php>Information</a></li>
    <li><a href=App_Page.php>Find our Hobby</a></li>
    <li><a href=signup.php>Register</a></li>
    </ul>
</div>

 <section class= "main-container">
    <div class = "main-wrapper">
        
      <div class="header">
      <h1> Login </h1>
      </div>
      
      <form class= "signup-form" action = "App_Page.php" method= "POST">
          
        <div class="input-group">
        <label>Username</label>
        <input type ="text" name="UserName"placeholder="username">
        </div>
        
        <div class="input-group">
        <label>Password</label>
        <input type ="password" name="pwd"placeholder="password"> 
        </div> 
        
        <button type = "submit" class="btn" name = "submit">Login</button>
        
        <p>
  		   
  		   New Member? <a href="signup.php">Sign Up</a>
    	
    	</p>
      </form>
      
    </div>
  </section>
  
  
  
  </body>
  
  </html>
  
 
        

<?php?>