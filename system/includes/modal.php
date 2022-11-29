<!doctype html>
<html>
<body>
	<!--------------- 			admin login 	------------>
<div class="modal" id="id1">
		<form class="modal-content animate" name="admin-form" action="admin_login.php" onsubmit="return validateadmin()" method="post" >
			<div class="img-container">
				<span class="close" onClick="document.getElementById('id1').style.display='none'">&times;</span>
				<img src="images/avatar.png"/>
			</div>
			
			<div class="form">
				<input type="text"  class="round-box" name="adminid" placeholder="Enter Username"  /><br /><br />
				<input type="password" id="myinput" class="round-box" name="adminpass" placeholder="Enter Password"  /><br />
				<p><input type="checkbox" onClick="passwordshow1()">Show Password</p></br>
				<input type="submit" id="submit" value="Login">
                <input type="button" value="cancel" id="close" onClick="document.getElementById('id1').style.display='none'">
			</div>			
		</form>	
</div>

<!--------------- 			Faculty login 	------------>

<div class="modal" id="id2">
		<form class="modal-content animate" name="faculty-login" action="faculty_login.php" method="post" onsubmit="return validatefaculty()" method="post">
			<div class="img-container">
				<span class="close" onClick="document.getElementById('id2').style.display='none'">&times;</span>
				<img src="images/avatar.png"/>
			</div>
			
			<div class="form">
				<input type="text" name="facultyid" class="round-box" placeholder="Enter Username"  /><br /><br />
				<input type="password" id="myinput2" name="facultypass" class="round-box" placeholder="Enter Password"  /><br />
				<p><input type="checkbox" onClick="passwordshow2()">Show Password</p></br>
				<input type="submit" id="submit" value="Login">
                <input type="button" value="cancel" id="close" onClick="document.getElementById('id2').style.display='none'">
			</div>			
		</form>
		</div>
	</div>

<!--------------- 			student login 	------------>
<div class="modal" id="id3">
		<form name="student" class="modal-content animate"  action="student_login.php"  onsubmit="return validate()" method="post">
			<div class="img-container">
				<span class="close" onClick="document.getElementById('id3').style.display='none'">&times;</span>
				<img src="images/avatar.png"/>
			</div>
			
			<div class="form">
				<input type="text" name="uname"  class="round-box" placeholder="Enter Username"  /><br /><br />
				<input type="password" id="myinput3" name="passw" class="round-box" placeholder="Enter Password"  /><br />
				<p><input type="checkbox" onClick="passwordshow3()">Show Password</p></br>
				<input type="submit" id="submit" value="Login">
                <input type="button" value="cancel" id="close" onClick="document.getElementById('id3').style.display='none'">
			</div>			
		</form>
		</div>
	</div>

	<script src="javascript/validate.js"></script>
</body>
</html>   
