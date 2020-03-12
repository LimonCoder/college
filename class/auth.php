<?php
	class auth{
		function auth_check()
		{
			if(!isset($_SESSION['user']))
			{
				header("location: ../auth/login.php");
			}
		}
	}

?>