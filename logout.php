<?php 

session_start(); 

// Logout 
session_destroy(); 

header("Location: index.php"); 
