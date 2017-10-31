<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript">
	function submitForm() {
var data = $("#login-form").serialize();
$.ajax({
type : 'POST',
url : 'login.php',
data : data,
beforeSend: function(){
$("#error").fadeOut();
$("#login_button").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
},
success : function(response){
if(response=="ok"){
$("#login_button").html('<img src="ajax-loader.gif" />   Signing In ...');
setTimeout(' window.location.href = "welcome.php"; ',4000);
} else {
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   '+response+' !</div>');
$("#login_button").html('<span class="glyphicon glyphicon-log-in"></span>   Sign In');
});
}
}
});
return false;
}
</script>
<form class="form-login" method="post" id="login-form">
<h2 class="form-login-heading">User Log In Form</h2><hr />
<div id="error">
</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
<span id="check-e"></span>
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Password" name="password" id="password" />
</div>
<hr />
<div class="form-group">
<button type="submit" class="btn btn-default" name="login_button" id="login_button">
<span class="glyphicon glyphicon-log-in"></span>   Sign In
</button>
</div>
</form>

