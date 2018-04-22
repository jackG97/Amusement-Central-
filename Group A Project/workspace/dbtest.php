<pre>
<?php

/*
$db = new mysqli('localhost', 
                'adamlwr', 
                '', 
                'Login');
                
//print_r($db);
if ($db->connect_errorno !=0){
    die("error in DB Connection $db-> connect_error");
} else{
    printf ("yes, connected\n");
    $qres = $db->query ("SELECT UserName, Pass_Word FROM login");
    printf("<table>");
    printf("<tr><th>UserName</th><th>Pass_Word</th></tr>");
    while ($row = $qres->fetch_assoc()){
        printf ("<tr><td>%s</td><td>%s</td></tr>\n", $row['UserName'], $row['Pass_Word']);
    }
}

session_start();

$connect = mysql_connect('localhost', 'adamlwr', '') or die('Database could not connect');
$select = mysql_select_db('Login', $connect) or die('Database could not select');

if (isset($_POST['submit'])) {
    $UserName = $_POST['Username'];
    $Pass_Word = $_POST['Password'];
    chckusername($UserName, $Pass_Word);
}

function chckusername($UserName, $Pass_Word){

    $check = "SELECT * FROM Login WHERE User_Name='$UserName'";
    $check_q = mysql_query($check_q) or die("<div class='login'>Error on checking Username<div>");

    if (mysql_num_rows($check_q) == 1) {
        chcklogin($UserName, $Pass_Word);
    }
    else{
        echo "<div id='login'>Wrong Username</div>";
    }
}

function chcklogin($UserName, $Pass_Word){

    $login = "SELECT * FROM Login WHERE UserName='$UserName'  and Pass_Word='$Pass_Word'";
    $login_q = mysql_query($login_q) or die('Error on checking Username and Password');

    if (mysql_num_rows($login_q) == 1){
        echo "<div id='login'> Logged in as $UserName </div>"; 
        $_SESSION['UserName'] = $UserName;
        header('Location: Information.php');
    }
    else {
        echo "<div id='login'>Wrong Password </div>"; 
        //header('Location: Information.php');
    }
}
*/

define('DB_HOST', 'localhost');
define('DB_NAME', 'Login');
define('DB_USER', 'adamlwr');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

 $UserName = $_POST['UserName']; 
$Pass_Word = $_POST['Pass_Word']; 

function SignIn() 
{ session_start(); //starting the session for user profile page 
if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{
    
$query = mysql_query("SELECT * FROM UserName where UserName = '$_POST[UserName]' AND Pass_Word = '$_POST[Pass_Word]'") or die(mysql_error());
$row = mysql_fetch_array($query) or die(mysql_error());
if(!empty($row['UserName']) AND !empty($row['Pass_Word']))
{
    $_SESSION['UserName'] = $row['Pass_Word']; 
    header('Location: App_Page.php');
    }
	else
	{
        echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
	} 

}

}
    if(isset($_POST['submit']))
    {
	        SignIn();
    }
     
    
?>
</pre>