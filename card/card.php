<?php
	$cid=$_GET["cid"];
	$mysqli=new mysqli("localhost", "root", "root", "card");

	if($mysqli->connect_errno > 0){
	    die('Unable to connect to database [' . $mysqli->connect_error . ']');
	}

	$result=$mysqli->query("select id, title from card where cid={$cid}");

	while($row=$result->fetch_assoc()){
		echo '<ul>';
		echo '<li><a href="con.php?id='.$row["id"].'">'.$row["title"].'</a></li>';
		echo '</ul>';
	}
