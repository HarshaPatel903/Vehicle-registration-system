<?php $title="/login";

    require_once'include/header.php';
    require_once'db/conn.php';
	  
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$uname = strtolower(trim($_POST['uname']));
		$password = $_POST['pass'];
		$new_password = md5($pass.$uname);
		
		$result = $user->getuser($uname,$new_password);
	  if($result){
		$_SESSION['uname'] = $uname;
		$_SESSION['userid'] = $result['id'];
		header("Location: index1.php");
	  }else{
		echo '<h1 style="color:#eb3434;" align="center"><span class="p1">Username or Password is incorrect! Please try again.</span></h1>';
		}
	}
?>
 <table width="100%" height="650px" cellspacing="5px" cellpadding="5px" align="center">
 <tr>
<td align="center">
<h1 align="center"><span class="p1">Login</span></h1>
<form action="index1.php" method="post"> 
<div class="p1">
   <label for="uname" >Username :</label>
   <input type="text" maxlength="10" name="uname"  placeholder="Enter Your username"  id="uname" required />
    
    <label for="password" >Password :</label>
    <input type="text" maxlength="10" name="pass"  placeholder="password" id="pass" required />
</div>
<button type="submit">LOGIN</button>
</form>
</td>
 </tr>
 </table>
<br/>
<?php require'include/footer.php'?>