<?php

//Connection with the data base 
$link = mysql_connect("mysql-server.ucl.ac.uk","ucjtw3g_user","vXq37JTQc4J22R9uIITd");
mysql_select_db("ucjtw3g", $link);

$ip_address = gethostbyname($_SERVER['REMOTE_ADDR']);
// $ip_address = "18.111.62.18";

//slashes added for escaping
$ip_address = addslashes($ip_address);


$query = "(SELECT 'ip' FROM cati_6 WHERE cati_6.ip ='$ip_address') 
UNION (SELECT 'ip' FROM cati_7 WHERE cati_7.ip ='$ip_address')";


$result = mysql_query($query, $link) or die ("Something went wrong!");

$num_result = mysql_num_rows($result);

if ($num_result > 0){
	// echo("You've done this before") ;
	echo(1);
}
else{
	// echo("you can do it!");
	echo(0);
}

?>

