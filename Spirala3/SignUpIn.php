<?php
session_start();

// define variables and set to empty values
$username = $email = $password = "";
$usernameErr = $emailErr = $passwordErr = "";
$error = false;

// forma register validacija
// define variables and set to empty values
$username1 = $email1 = $password1 = $password_confirmation = "";
$usernameErr1 = $emailErr1 = $passwordErr1 = $password_confirmationErr = "";
$error1 = false;
$errors = 0;

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['login'])){


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["username1"])) 
  {
    $usernameErr = "Username is required!";
  } 
  else 
  {
    $username = test_input($_POST["username1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) 
	{
      $usernameErr = "Only letters and white space allowed!"; 
    }
	if (strlen($_POST['username1']) < 3) 
	{
      $usernameErr = "Username must be at least 3 characters long!"; 
    }
	
  }
  
  if (empty($_POST["email1"])) 
  {
    $emailErr = "Email is required!";
  } 
  else 
  {
    $email = test_input($_POST["email1"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
      $emailErr = "Invalid email format!"; 
    }
  }
  
    if (empty($_POST["password1"]))
    {
    $passwordErr = "Password is required!";
    } 
  else 
  {
    $password = test_input(md5($_POST["password1"]));
        if (strlen($_POST['password1']) < 8) 
	{
      $passwordErr = "Password must be at least 8 characters long!"; 
    }
  }
}
 if (!empty($_POST["username1"]) && !empty($_POST["email1"]) && !empty($_POST["password1"]) ){$error = true;} 
	
	//login za admina
	if(file_exists('XML/' . $username . '.xml')){
		$xml = new SimpleXMLElement('XML/' . $username . '.xml', 0, true);
		if($email == $xml->email && $password == $xml->password)
		{
			session_start();
			$_SESSION['username1'] = $username;
			header('Location: adminIndex.php');
			die;
			
		}
	}

}
elseif(isset($_POST['register'])){


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["username2"])) 
  {
    $usernameErr1 = "Username is required!";
	$errors++;
  } 
  else 
  {
    $username1 = test_input($_POST["username2"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username1)) 
	{
      $usernameErr1 = "Only letters and white space allowed!"; 
	  $errors++;
    }
	if (strlen($_POST['username2']) < 3) 
	{
      $usernameErr1 = "Username must be at least 3 characters long!"; 
	  $errors++;
    }
  }
  
  if (empty($_POST["email2"])) 
  {
    $emailErr1 = "Email is required!";
	$errors++;
  } 
  else 
  {
    $email1 = test_input($_POST["email2"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) 
	{
      $emailErr1 = "Invalid email format!"; 
	  $errors++;
    }
  }
  
    if (empty($_POST["password2"]))
    {
    $passwordErr1 = "Password is required!";
	$errors++;
    } 
  else 
  {
    $password1 = test_input(md5($_POST["password2"]));
        if (strlen($_POST['password2']) < 8) 
	{
      $passwordErr1 = "Password must be at least 8 characters long!"; 
	  $errors++;
    }
  }
  
  if (empty($_POST["password_confirmation"]))
    {
    $password_confirmationErr = "Password confirmation is required!";
	$errors++;
    } 
  else 
  {
    $password_confirmation = test_input(md5($_POST["password_confirmation"]));
        if (strlen($_POST['password_confirmation']) < 8) 
	{
      $password_confirmationErr = "Password must be at least 8 characters long!"; 
	  $errors++;
    }
  }
  
   if(($_POST["password2"] != $_POST["password_confirmation"])) $error1=true;
  
 }
  if(!empty($_POST["username2"]) && !empty($_POST["email2"]) && !empty($_POST["password2"]) && !empty($_POST["password_confirmation"]) && $errors == 0)
  
  {
	//dodavanje korisnika u xml registrovanih korisnika
  $xml = new DOMDocument();
  $xml->load('XML/registrovaniKorisnici.xml');
  
    $usernameRegister = $_POST['username2'];
	$emailRegister = $_POST['email2'];
	$passwordRegister = $_POST['password2'];
	
	$rootTag = $xml->getElementsByTagName("root")->item(0);
	
	$infoTag = $xml->createElement("user");


	$usernameTag = $xml->createElement("username", $usernameRegister);
	$emailTag = $xml->createElement("email", $emailRegister);
	$passwordTag = $xml->createElement("password", $passwordRegister);
	
	$infoTag->appendChild($usernameTag);
	$infoTag->appendChild($emailTag);
	$infoTag->appendChild($passwordTag);
	
	$rootTag->appendChild($infoTag);
	$xml->save('XML/registrovaniKorisnici.xml');
	
	$username1 = $email1 = $password1 = $password_confirmation = "";

  }
	  
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <title> Beauty salon </title>
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="SignUpIn.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">

   </head>
   <body>
      <header id="header">
         <div class="container">
            <div class= "logo">
               <h2><i class= "fa fa-heart"></i> Beauty Salon Glow</h2>
            </div>
            <nav id="nav">
               <ul>
                  <li><a href= "index.php">Home</a></li>
                  <li><a href= "aboutUs.php">About us</a></li>
                  <li><a href= "services.php">Services</a></li>
                  <li><a href= "promotions.php">Promotions</a></li>
                  <li><a href= "contact.php">Contact</a></li>
               </ul>
            </nav>
         </div>
      </header>
      <div id= "slider" style="background-image: url('images/background.jpg');" >
      </div>
      <div class= "FormRegisterLogin">
         <div class="formleft">
            <div class="forme">
               <form class="form" id="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			   <h3>Login</h3>
                  <div>
                     <input type="text" name="username1" placeholder="Username" value="<?php echo $username;?>">
                     <div id="name_error1" class="val_error"><?php echo $usernameErr;?></div>
                  </div>
                  <div>
                     <input type="email" name="email1" placeholder="Email" value="<?php echo $email;?>">
                     <div id="email_error1" class="val_error"><?php echo $emailErr;?></div>
                  </div>
                  <div>
                     <input type="password" name="password1" placeholder="Password">
                     <div id="password_error1" class="val_error"><?php echo $passwordErr;?></div>
                  </div>
                  <?php
				  if($error){
					  echo '<p style="color:red;">Invalid username and/or email and/or password!</p>';
			      }
				  ?>
                  <div>
                     <input type="submit" class="button-login" name="login" value="Login">
                  </div>
               </form>
            </div>
         </div>
         <div class="formright">
            <div class="forme">
               <form class="form" id="form2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			   <h3>Register</h3>
                  <div>
                     <input type="text" name="username2" placeholder="Username" value="<?php echo $username1;?>">
                     <div id="name_error2" class="val_error"><?php echo $usernameErr1;?></div>
                  </div>
                  <div>
                     <input type="email" name="email2"  placeholder="Email" value="<?php echo $email1;?>">
                     <div id="email_error2" class="val_error"><?php echo $emailErr1;?></div>
                  </div>
                  <div>
                     <input type="password" name="password2" placeholder="Password">
					 <div id="password_error2" class="val_error"><?php echo $passwordErr1;?></div>
                  </div>
                  <div>
                     <input type="password" name="password_confirmation" placeholder="Password confirmation">
                     <div id="password_error2" class="val_error"><?php echo $password_confirmationErr;?></div>
                  </div>
				  <?php
				  if($error1){
					  echo '<p style="color:red;">The two passwords do not match!</p>';
			      }
				  ?>
                  <div>
                     <input type="submit" class="button-register" name="register" value="Register">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <section>
         <div class="container">
            <div class= "icon">
               <i class= "fa fa-facebook"></i>
            </div>
            <div class="description">
               <h3>Facebook Marketing</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
               </p>
            </div>
            <div class= "icon">
               <i class= "fa fa-twitter"></i>
            </div>
            <div class="description">
               <h3>Twitter Marketing</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
               </p>
            </div>
            <div class= "icon">
               <i class= "fa fa-google-plus"></i>
            </div>
            <div class="description">
               <h3>Google Plus Marketing</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
               </p>
            </div>
         </div>
      </section>
      <footer>
         <div class="container">
            <div class="logmenu">
               <ul>
                  <li><a href= "SignUpIn.php">Sign in</a></li>
                  <li><a href= "signOut.php">Sign out</a></li>
               </ul>
            </div>
         </div>
      </footer>
	  <script src="signUpIn.js"></script>
	  <script src="dropdownMenu.js"></script>
   </body>
</html>
