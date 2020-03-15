<?php
	require "../class/app.php";
	$app = new app();
	if(isset($_POST['check']))
    {
        $t = $_POST['type'];
        $data = $_POST['data'];
        if($t ==1)
        {
            $query = "SELECT * FROM `user` where email like '$data' ";
            $r = $app->count($query);

            echo $r;
        }
        if($t ==2)
        {
            $query = "select * from user where phone = $data ";
            $r = $app->count($query);
            if($r >0)
            {
                echo "0";
            }else {
                echo "1";
            }
        }
    
    }

?>