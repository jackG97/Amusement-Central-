{"filter":false,"title":"serever.php","tooltip":"/serever.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":57,"column":7},"action":"insert","lines":["<?php","session_start();","","// initializing variables","$username = \"\";","$email    = \"\";","$errors = array(); ","","// connect to the database","$db = mysqli_connect('localhost', 'ana976', '', 'registration');","","// REGISTER USER","if (isset($_POST['reg_user'])) {","  // receive all input values from the form","  $username = mysqli_real_escape_string($db, $_POST['username']);","  $email = mysqli_real_escape_string($db, $_POST['email']);","  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);","  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);","","  // form validation: ensure that the form is correctly filled ...","  // by adding (array_push()) corresponding error unto $errors array","  if (empty($username)) { array_push($errors, \"Username is required\"); }","  if (empty($email)) { array_push($errors, \"Email is required\"); }","  if (empty($password_1)) { array_push($errors, \"Password is required\"); }","  if ($password_1 != $password_2) {","\tarray_push($errors, \"The two passwords do not match\");","  }","","  // first check the database to make sure ","  // a user does not already exist with the same username and/or email","  $user_check_query = \"SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1\";","  $result = mysqli_query($db, $user_check_query);","  $user = mysqli_fetch_assoc($result);","  ","  if ($user) { // if user exists","    if ($user['username'] === $username) {","      array_push($errors, \"Username already exists\");","    }","","    if ($user['email'] === $email) {","      array_push($errors, \"email already exists\");","    }","  }","","  // Finally, register user if there are no errors in the form","  if (count($errors) == 0) {","  \t$password = md5($password_1);//encrypt the password before saving in the database","","  \t$query = \"INSERT INTO users (username, email, password) ","  \t\t\t  VALUES('$username', '$email', '$password')\";","  \tmysqli_query($db, $query);","  \t$_SESSION['username'] = $username;","  \t$_SESSION['success'] = \"You are now logged in\";","  \theader('location: index.php');","  }","}","","// ... "],"id":1}],[{"start":{"row":9,"column":35},"end":{"row":9,"column":41},"action":"remove","lines":["ana976"],"id":2},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["a"]}],[{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["d"],"id":3}],[{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["a"],"id":4}],[{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["m"],"id":5}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["l"],"id":6}],[{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["w"],"id":7}],[{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["r"],"id":8}]]},"ace":{"folds":[],"scrolltop":752,"scrollleft":0,"selection":{"start":{"row":9,"column":42},"end":{"row":9,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":46,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1523573044984,"hash":"34fe1aa5a1f7d347903a38f57c21e83893bf983e"}