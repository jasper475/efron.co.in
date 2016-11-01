<?php
setcookie("HR_SESSION_ID","HR_134_XY",time()+60*1);

echo $_COOKIE[HR_SESSION_ID];


echo time();
//setcookie("HR_SESSION_ID","",time()-60*25);


?>