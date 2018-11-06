<?php
session_start();
session_unset();  
session_destroy();
echo "Successfully logged out....................Redirecting to home page in 2 seconds";
	  header( "refresh:2;url=index.html" );
?>
