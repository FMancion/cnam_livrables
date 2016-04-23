<?php

include 'cookie.php' //fichiers langue;
?>
<!DOCTYPE html>
<head>
  <title><?php $lang['title']; ?></title>
  <meta name="description" content=" <?php echo $lang['description']; ?> ">
  <meta name="keywords" content="<?php echo $lang['keywords']; ?> ">
  <meta name="author" content="********">
  <meta name="robots" content="index, follow">
  <link rel="stylesheet" media="screen" type="text/css" title="template" href="template.css">
  <style>
  body{
  	background:white;
  	}
  #error{
  	color: white;
  	background: black;
  	}
  </style>
</head>
<body>
 <h1>Essaie !</h1>
<a href="index.php?lang=en">English</a>
<a href="index.php?lang=fr">Français</a>
<div>
<form method="post" action="index.php" enctype="x-www-form-urlencodes">
 <input type="text" value="<?php echo $lang['pseudo']; ?> " name="pseudo" ><br>
 <input type="text" value="<?php echo $lang['email']; ?> " name="email" ><br>
 <input type="password" value="<?php echo $lang['password']; ?> " name="password" ><br>
 <input type="submit" value="<?php echo $lang['play']; ?>" name="submit" > 
</form>
<?php

$user = "j****";
$host = "*****";
$pass = "*********";
$db = "**********";
$con = mysqli_connect($host,$user,$pass);
mysqli_select_db($con, $db); 


if(isset($_POST['pseudo'])  && (isset($_POST['email'])) && (isset($_POST['password'])) )
{
    $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#[a-zA-Z0-9]#", $_POST['pseudo']))
    {
        echo "<p id='valide'>". $lang['pseudoValidate']."</p><br>";
        $pseudo= $_POST['pseudo'];
        
        $_POST['email'] = htmlspecialchars($_POST['email']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
        echo "<p id='valide'>". $lang['emailValidate']."</p><br>";
        $email = $_POST['email'];
    }
    else
    {
       echo "<p id='error'>". $lang['emailUnValidate'] ."</p><br>";
    } 
       
    }
    else
    {
       echo "<p id='error'>". $lang['pseudoUnValidate'] ."</p><br>" ;
    }

    

    $_POST['passwordl'] = htmlspecialchars($_POST['password']); 
    if (preg_match("#^(?=.*\d)(?=.*[a-zA-Z]).{4,8}#", $_POST['password']))
    {
        //string to have at least one Numeric and one Character and the  length of text string to be between 4 to 8 characters
	      $pass = $_POST['password'] ;
	      $passs = hash('sha256', $pass);
        
         header('location: page_002.php');
          mysqli_query($con, "INSERT INTO players SET  pseudo='".$pseudo."', password='".    $passs."', email='".$email."' " ); 	
        
    }
    else
    {
        echo "<p id='error'>". $lang['passwordUnValidate'] ."</p><br>";
    }
  
}
mysqli_close($con);?>
</div>
<div></div>
<div>

</div>
</body>
</html>