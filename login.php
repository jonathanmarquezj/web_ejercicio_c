<?PHP
	ini_set("session.cookie_lifetime","7200");
	ini_set("session.gc_maxlifetime","7200");

	session_start();

	$usercont=substr_count($_POST['dni'],"'");
	$passcont=substr_count($_POST['pass'],"'");


	if($usercont==0 && $passcont==0)
	{
		$_SESSION['dni']=$_POST['dni'];
		$_SESSION['pass']=$_POST['pass'];
	}

	print("<script>document.location.href='home/index.php'</script>");
	exit();
?>
