<?php
session_start();
if(isset($_SESSION['username']))
{
  header("location: User.php");
}
else if(isset($_SESSION['password']))
{
  header("location: Kairat_admin.php");
 }
?>
<!-- <html>
<head>
  <meta charset="UTF-8"/>
  <style>
  .Error_1{
    background-color:black; 
    border:0px;
    box-shadow: 5px 5px 100px white;
    
    border-radius:10px;
    opacity:0.6; 
    margin-top:350px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    width:600px;   
  }
  .Error_1:hover{
  background-color:grey;
  opacity:0.5; 
  } 
  .Error{
    background-color:black; 
    border:0px;
    box-shadow: 5px 15px 50px white;
    
    border-radius:10px;
    opacity:0.6; 
    margin-top:350px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    width:1000px;   
}
.Error:hover{
  background-color:grey; 
}
.Error_a{
  color: white;
  text-shadow: 2px 2px 4px orange;
  font-size:35px;
      
      
      
      
    }
  </style>
</head> -->

<?php
header( 'Content-Type: text/html; charset=utf-8' );
mysql_connect("localhost","root","");
mysql_select_db("sdu");
mysql_set_charset("utf8");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$result = mysql_query("SELECT * FROM users WHERE username='$username'"); 
$myrow = mysql_fetch_array($result);
if (empty($myrow['password']))
    {
       
        exit("<div class='Error'><a class='Error_a' href='login.php'> Извините, введённый вами логин адрес или пароль неверный. Введите правильные данные.</a></div>");
    }
else 
   {
      if(($username=='Tango') && ($password=='masterfootball')){
              $_SESSION['password']=$myrow['password']; 
             
                header("location:Kairat_admin.php");
              }
        elseif ($myrow['password']==$password) 
          {
              $_SESSION['username']=$myrow['username']; 
              $_SESSION['id']=$myrow['id'];
              
              
              header("location: ../user.php");
              
          }
       else
          {
        exit ("<div class='Error'><a class='Error_a'>Извините, введённый вами E-mail адрес или пароль неверный. Введите правильные данные.</a><>");  
          }
   }
?>