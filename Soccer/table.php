<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SDU | FOOTBALL LEAGUE</title>
<link rel="icon" href="title-image.png" type="image/x-iconth
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="js/bootstrap.min.js"></script>-->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/sty.css" rel='stylesheet' type='text/css' />
<link href="css/table.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!----//requred-js-files---->
<script src="js/easing.js"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {
			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000
			    });
			});
		</script>	
</head>
<body>
    <div class="TABLE">
	  	<div class="table_box">
	  	<?php
			mysql_connect("localhost","root","");
			mysql_select_db("sdu");
			mysql_query("SET NAMES utf8");
			$query = "SELECT * FROM team_table where group_name = 'A' ORDER BY point DESC";
			$result = mysql_query($query);
			$a = 1;	
			?>
			<h4>Group A</h4>
			<TABLE border="0">
				<tr id="table_title">
					<th id='number'>№</th>
					<th>TEAMS</th>
					<th>GAME</th>
					<th>WIN</th>
					<th>DRAW</th>
					<th>LOSE</th>
					<th>SCORE</th>
					<th>SKIP</th>
					<th>GD</th>
					<th>POINT</th>
				</tr>
				<?php
					while($row = mysql_fetch_assoc($result)){

				?>
				
				<tr id="table_rank">
					<td id='number'><?php echo $a; ?></td>
					<td><b><?php echo $row["team_name"];?></b></td>
					<td><?php echo $row["game"];?></td>
					<td><?php echo $row["win"];?></td>
					<td><?php echo $row["draw"];?></td>
					<td><?php echo $row["lose"];?></td>
					<TD><?php echo $row["score"];?></TD>
					<td><?php echo $row["skip"];?></td>
					<td><?php echo $row["differences"];?></td>
					<td><?php echo $row["point"];?></td>
				</tr>

				<?php
					$a = $a + 1;
					}
				?>
			</TABLE>


			<?php
			mysql_connect("localhost","root","");
			mysql_select_db("sdu");
			mysql_query("SET NAMES utf8");
			$query = "SELECT * FROM team_table where group_name  = 'B' ORDER BY point DESC";
			$result = mysql_query($query);
			$a = 1;	
			?>
			<h4>Group B</h4>
			<TABLE border="0">
				<tr id="table_title">
					<th id='number'>№</th>
					<th>TEAMS</th>
					<th>GAME</th>
					<th>WIN</th>
					<th>DRAW</th>
					<th>LOSE</th>
					<th>SCORE</th>
					<th>SKIP</th>
					<th>GD</th>
					<th>POINT</th>
				</tr>
				<?php
					while($row = mysql_fetch_assoc($result)){

				?>
				
				<tr id="table_rank">
					<td id='number'><?php echo $a; ?></td>
					<td><b><?php echo $row["team_name"];?></b></td>
					<td><?php echo $row["game"];?></td>
					<td><?php echo $row["win"];?></td>
					<td><?php echo $row["draw"];?></td>
					<td><?php echo $row["lose"];?></td>
					<TD><?php echo $row["score"];?></TD>
					<td><?php echo $row["skip"];?></td>
					<td><?php echo $row["differences"];?></td>
					<td><?php echo $row["point"];?></td>
				</tr>

				<?php
					$a = $a + 1;
					}
				?>
			</TABLE>

			<?php
			mysql_connect("localhost","root","");
			mysql_select_db("sdu");
			mysql_query("SET NAMES utf8");
			$query = "SELECT * FROM team_table where group_name  = 'C' ORDER BY point DESC";
			$result = mysql_query($query);
			$a = 1;	
			?>
			<h4>Group C</h4>
			<TABLE border="0">
				<tr id="table_title">
					<th id='number'>№</th>
					<th>TEAMS</th>
					<th>GAME</th>
					<th>WIN</th>
					<th>DRAW</th>
					<th>LOSE</th>
					<th>SCORE</th>
					<th>SKIP</th>
					<th>GD</th>
					<th>POINT</th>
				</tr>
				<?php
					while($row = mysql_fetch_assoc($result)){

				?>
				
				<tr id="table_rank">
					<td id='number'><?php echo $a; ?></td>
					<td><b><?php echo $row["team_name"];?></b></td>
					<td><?php echo $row["game"];?></td>
					<td><?php echo $row["win"];?></td>
					<td><?php echo $row["draw"];?></td>
					<td><?php echo $row["lose"];?></td>
					<TD><?php echo $row["score"];?></TD>
					<td><?php echo $row["skip"];?></td>
					<td><?php echo $row["differences"];?></td>
					<td><?php echo $row["point"];?></td>
				</tr>

				<?php
					$a = $a + 1;
					}
				?>
			</TABLE>

			<?php
			mysql_connect("localhost","root","");
			mysql_select_db("sdu");
			mysql_query("SET NAMES utf8");
			$query = "SELECT * FROM team_table where group_name  = 'D' ORDER BY point DESC";
			$result = mysql_query($query);
			$a = 1;	
			?>
			<h4>Group D</h4>
			<TABLE border="0">
				<tr id="table_title">
					<th id='number'>№</th>
					<th>TEAMS</th>
					<th>GAME</th>
					<th>WIN</th>
					<th>DRAW</th>
					<th>LOSE</th>
					<th>SCORE</th>
					<th>SKIP</th>
					<th>GD</th>
					<th>POINT</th>
					
				</tr>
				<?php
					while($row = mysql_fetch_assoc($result)){

				?>
				
				<tr id="table_rank">
					<td id='number'><?php echo $a; ?></td>
					<td><b><?php echo $row["team_name"];?></b></td>
					<td><?php echo $row["game"];?></td>
					<td><?php echo $row["win"];?></td>
					<td><?php echo $row["draw"];?></td>
					<td><?php echo $row["lose"];?></td>
					<TD><?php echo $row["score"];?></TD>
					<td><?php echo $row["skip"];?></td>
					<td><?php echo $row["differences"];?></td>
					<td><?php echo $row["point"];?></td>
				</tr>

				<?php
					$a = $a + 1;
					}
				?>
			</TABLE>
			


		<!-- <div class="clearfix"> </div> -->
		</div>
	</div>

   <!-- <div class="portfolio_bottom">
   	 <a class="btn3" href="#"><span>Loadmore</span></a>
   </div>
   <div class="services s2" id="services">
   	  <div class="container">
   	  	<h2 class="service_head">Our Services</h2>
   	   <div class="row text-center">
   	    <div class="col-md-3 service_grid">
   		  <i class="icon1"> </i>
   		  <h3 class="m_1"><a href="#">One Page Layout</a></h3>
   		  <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
   		</div>
   		<div class="col-md-3 service_grid">
   		  <i class="icon2"> </i>
   		 <h3 class="m_1"><a href="#">Flat Design</a></h3>
   		  <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
   		</div>
   		<div class="col-md-3 service_grid">
   		  <i class="icon3"> </i>
   		  <h3 class="m_1"><a href="#">Photo portfolio</a></h3>
   		  <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
   		</div>
   		<div class="col-md-3">
   		  <i class="icon4"> </i>
   		  <h3 class="m_1"><a href="#">Easy to edit</a></h3>
   		  <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
   		</div>
   	  </div>
   	  </div>
   	</div> -->
  <!--   <div class="photograph">
   	  <div class="container">
   		<div class="slider-left">
		  <h1>Never Stop Photographing</h1>
		  <p class="top_desc">It Is very likely that your best photograph has not yet been captured</p>
		  <p class="bottom_desc">- imperdiet doming</p>
		</div>
   	  </div>
   	</div> -->
   <!-- 	<div class="signup s3" id="signup">
       <div class="container">
   			<h3 class="m_3">Are you Interested ? <br> Sign up now</h3>
   			<div class="contact-form">
			   <form method="post" action="contact-post.html">
				 <input type="text" class="textbox" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}">
				 <input type="text" class="textbox" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">
				 <input type="text" class="textbox" value="Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address';}">
				 <input type="submit" value="Sign Up">
			   </form>
			</div>
   		</div>
   	</div> -->
    <!-- <div class="about s4" id="about">
   		<div class="container">
   			<h3 class="m_4">About Us</h3>
   			<p class="m_5">nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
   			<div class="row text-center">
   				<div class="col-md-3 about-grid text-center">
   				  <img src="images/pic1.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="images/pic3.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="images/pic2.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="images/pic4.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   			</div>
   		</div>
   	</div> -->
   	<!-- <div class="contact s5" id="contact">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-8 contact_left">
   					<h3>We Want to hear from you</h3>
   					<p class="m_6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla</p>
   					<p class="m_7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla</p>
   					<ul class="contact_info">
			  	<li><i class="pin"> </i><span>Lorem ipsum dolor sit amet, consectetuer <br>adipiscing elit, sed diam nonummy nibh euismod</span></li>
			  	<li><i class="mobile"> </i><span>Tell: +1-900-235-2456<br>Fax: +1-900-235-2456</span></li>
			  	<li><i class="message"> </i><span class="msg">info(at)shutter.com</span></li>
			  </ul>
   				</div>
   				<div class="col-md-4">
   					<div class="contact_right">
   				<div class="contact-form_grid">
				   <form method="post" action="contact-post.html">
					 <input type="text" class="textbox" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your name';}">
					 <input type="text" class="textbox" value="Your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email';}">
					 <input type="text" class="textbox" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
					 <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					 <input type="submit" value="Send">
				   </form>
			      </div>
   			     </div>
   				</div>
   			</div>
   		</div>
   	</div -->
   <!-- 	<div class="footer">
   		<div class="container">
   			<div class="copy">
		       <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		    </div>
		    <div class="social">	
		      <ul>	
			   <li class="facebook"><a href="#"><span> </span></a></li>
			   <li class="twitter"><a href="#"><span> </span></a></li>
			   <li class="rss"><a href="#"><span> </span></a></li>	
			   <li class="google"><a href="#"><span> </span></a></li>			
		     </ul>
			</div>
			<div class="clearfix"></div>
   		</div>
   	</div> -->
   	<script src="js/bootstrap.min.js"></script>
</body>
</html>

