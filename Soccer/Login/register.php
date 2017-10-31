<?php
// session_start();
// if(isset($_SESSION['login']))
// {
//   header("location: DATA.php");
// }
?>


<?php
  mysql_connect("localhost","root","");
  mysql_select_db("SDU");
  
    $username= $_REQUEST['username'];
    $password= $_REQUEST['password'];
    $passwordRepeat = $_REQUEST["passwordRepeat"];
    $email = $_REQUEST["email"];
  
    $a = 0;
    if($password == $passwordRepeat){
        $a=1;
    }
    
    if($a == 1){
      $query = "SELECT * FROM users WHERE username ='$username'";
      $result = mysql_query($query);
      $myrow = mysql_fetch_array($result);
      if(!empty($myrow['id'])) 
        {
          exit("Sorry, this login already exists");
        }
        $query2 = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
        
        $result2 = mysql_query($query2);
        $myrow2 = mysql_fetch_array($result2);
        if ($result2=='TRUE')
        {
          echo "<br><a class='success'>SUCCESS</a></br> <a class='main' href='DATA.php'>Main page</a>";
          header("location:signin.php");
          
        }
        else{
         echo "NONNON";
         echo $a;
         echo $myrow['name']." +++++++";
        }
    }
    else{
      echo "<div class='confirm'><a class='confirm_a'>You enter wrong confirm password</a></div>";
      echo $a;
    }
?>