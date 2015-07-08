<?php

$firstName = _POST['firstname'];
$LastName = _POST['lastname'];
$msg = $firstName."".$lastName."has subscribed."
mail("kirththiga.m@gmail.com", "Test Email", $msg);
?>