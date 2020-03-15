<?php
    require "app.php";
	class auth extends app{
		function auth_check()
		{
			if(!isset($_COOKIE['user']))
			{
				header("location: ../auth/login.php");
			}
		}

	}

?>