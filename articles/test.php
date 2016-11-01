<?php

$var = "This is my first PHP Ever of variable ";
echo $var;


$emailTo = "jasper475@rediffmail.com";
$subject = "This is a test email from PHP";
$body = "Hello, <br/> This is Jasper Running out crazy for the elixir of life";
$emailFrom = "From: xyz@gmail.com";

if ( mail($emailTo,$subject,$body,$emailFrom)) 
{
	echo("SUCCESS : Email sent to $emailTo")	;
}
else
{
	echo "FAILED : email Not sent to $emailTo ";
}


?>