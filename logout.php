<?php  

//Session Start rfn
session_start();

// Delete Session
session_destroy();
session_unset();

// Redirect
header("Location: index.php");
// will header to index.php

?>
