<?php
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
echo "Username: ".$_SESSION['user'];
echo "<br/>";
echo "Password: ".$_SESSION['pass'];
}
?>
