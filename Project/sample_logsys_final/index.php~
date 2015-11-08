<?php
   require_once ("initialise.php");
	include('conn.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href = "page.css" media="screen">
		<script src="jquery-1.7.2.min.js"></script>
		<script language="JavaScript" src="page.js"></script>
		<title>
			New Chat
		</title>
		  <style type="text/css">
			html{font-size:18px;}
			fieldset{width:500px; margin: 0 auto;}
			legend{font-weight:bold; font-size:20px;}
			span{color: #666666;}
			text-align:center;  
			line-height:40px;  
				}
		  
  </style>
	</head>

	<body>
		<div>
			<div id="header">
				<?php if (!empty($_SESSION['user']) && isset($_SESSION['user'])) { ?>
					Welcome <?php echo $_SESSION['user']; ?> to my public chat!!!
					<input type="button" name="Submit" value="logout" class="btn" onclick="location.href='./logout.php'" />
				<?php } ?>
			</div>
			
			<div id="mainpage" >
			
				<?php if (!empty($_SESSION['user'])) { ?>
				<div id="sidebar">
				<div id = " online " align="left" >
				<?php 
					$queryonline = mysql_query("select user from users where status = 1");
					$onlineuser = array();
					while ($updateResult1 = mysql_fetch_array($queryonline, MYSQL_ASSOC)) {
						$onlineuser[] = $updateResult1['user'];
					}?>
				
					Online: <br><?php if (!empty($onlineuser)) {
						foreach ($onlineuser as $onlineusers) {
							echo $onlineusers."<br />";
						}
					} else {
						echo "Nobody is here!";
					} ?></br>
					</div>
					<div id = " offline" align="left">
					<?php 
					$queryoffline = mysql_query("select user from users where status = 0");
					$offlineuser = array();
					while ($updateResult2 = mysql_fetch_array($queryoffline, MYSQL_ASSOC)) {
						$offlineuser[] = $updateResult2['user'];
					}?>
					
					Offline: <br><?php if (!empty($offlineuser)) {
						foreach ($offlineuser as $offlineusers) {
							echo $offlineusers."<br />";
						}
					} else {
						echo "Nobody is here!";
					} ?></br>
					</div>
				
				</div>
			<?php } ?>
				<div id= "mainbody">
						<?php if (empty($_SESSION['user'])) { ?>
			<div id="nolog" style="display;"> 
			<fieldset>
			<legend></legend>
			<form name="LoginForm" method="post" action="login.php" onSubmit="return InputCheck1(this)">
			<p>
			<label for="user" class="label">Username</label>
				<input id="user" name="user" type="text" class="input" />
			<p/>
			<p>
			<label for="pd" class="label">password</label>
			<input id="pd" name="pd" type="pd" class="input" />
			<p/>
			<p>
			<input type="submit" name="submit" value=" Enter " class="left" />
			</p>
			</form>
			<form name="RegForm" method="post" action="reg2.php">
				<input type="submit" name="submit" value="  Join Now!!! " class="left"/>

			</form>

			</div>
			<?php } ?>
			<?php if (!empty($_SESSION['userReg']) && empty($_SESSION['user'])) { ?>
			<div id = " reg" style="display;">
			<fieldset>
			<legend></legend>
			<form name="RegForm" method="post" action="./reg.php" onSubmit="return InputCheck2(this)">
			<p>
			<label for="user" class="label">Username:</label>
			<input id="user" name="user" type="text" class="input" />
			<span></span>
			<p/>
			<p>
			<label for="pd" class="label">Password:</label>
			<input id="pd" name="pd" type="pd" class="input" />
			<span></span>
			<p/>
			<p>
			<label for="repass" class="label">Re-Password:</label>
			<input id="repass" name="repass" type="pd" class="input" />
			<p/>
			<p>
			<input type="submit" name="submit" value="  Submit  " class="left" /><input type="button" name="Submit" value="Go Back!!!" class="btn" onclick="location.href='./Clear.php'" />
			</form>
			</fieldset>
			</div>
			<?php } ?>
			<?php if (!empty($_SESSION['user'])) { ?>
	<div  align="center" id ="mychat" >
	    <div id="wrapper" align="left">
		    <p id="messagewindow"><span id="loading">Loading</span></p>
		    
	    </div>
	</div>
<?php } ?>
			</div>
			<?php if (!empty($_SESSION['user'])) { ?>
			<div id = "megs">
			
				<form id="chatform">
					Name: 
					<input type="text" id="author" disabled="disabled" size="6"  value ="<?php if (!empty($_SESSION['user']) && isset($_SESSION['user']))
					{
						echo $_SESSION['user'];
					}
					?>"/>
					Input:<input type="text" id="msg" size="30" />

					<input type="submit" value="Submit" /><br />
				</form>
			</div>
			<?php } ?>
		</div>
	</body>
</html>
