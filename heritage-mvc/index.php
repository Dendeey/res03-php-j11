<?php

require "models/User.php";
require "managers/UserManager.php";

$newUser = new User("david@gmail.com", "David", "abcde");
insertUser($newUser);




?>